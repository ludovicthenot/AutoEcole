<?php
declare(strict_types=1);

function env_value(string $key, ?string $default = null): ?string
{
    $value = getenv($key);

    if ($value === false || $value === '') {
        return $default;
    }

    return $value;
}

function tidb_ssl_ca_path(): string
{
    $configuredPath = env_value('DB_SSL_CA');
    if ($configuredPath !== null) {
        return $configuredPath;
    }

    $configuredContent = env_value('DB_SSL_CA_CONTENT');
    if ($configuredContent !== null) {
        $temporaryPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'tidb-ca.pem';
        $certificate = str_replace('\n', "\n", $configuredContent);

        if (substr($certificate, -1) !== "\n") {
            $certificate .= "\n";
        }

        if (@file_put_contents($temporaryPath, $certificate) === false) {
            throw new RuntimeException('Impossible de preparer le certificat TLS.');
        }

        return $temporaryPath;
    }

    $candidatePaths = [
        '/etc/ssl/certs/ca-certificates.crt',
        '/etc/pki/tls/certs/ca-bundle.crt',
        '/etc/ssl/cert.pem',
        '/etc/ssl/ca-bundle.pem',
        __DIR__ . '/../certs/isrgrootx1.pem',
    ];

    foreach ($candidatePaths as $path) {
        if (is_readable($path)) {
            return $path;
        }
    }

    throw new RuntimeException('Aucun certificat TLS lisible pour TiDB Cloud.');
}

function get_pdo(): PDO
{
    $host = env_value('DB_HOST');
    $port = env_value('DB_PORT', '4000');
    $database = env_value('DB_NAME');
    $user = env_value('DB_USER');
    $password = env_value('DB_PASSWORD');

    if ($host === null || $database === null || $user === null || $password === null) {
        throw new RuntimeException('Variables de connexion manquantes.');
    }

    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
        $host,
        $port,
        $database
    );

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    if (defined('PDO::MYSQL_ATTR_SSL_CA')) {
        $options[constant('PDO::MYSQL_ATTR_SSL_CA')] = tidb_ssl_ca_path();
    }

    if (defined('PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT')) {
        $options[constant('PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT')] = true;
    }

    return new PDO($dsn, $user, $password, $options);
}

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

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

function pdo_mysql_attribute(string $modernConstant, string $legacyConstant): ?int
{
    if (defined($modernConstant)) {
        return constant($modernConstant);
    }

    if (defined($legacyConstant)) {
        return constant($legacyConstant);
    }

    return null;
}

function ensure_database_schema(PDO $pdo): void
{
    static $schemaReady = false;

    if ($schemaReady) {
        return;
    }

    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS eleves (
            id_eleve INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(100) NOT NULL,
            prenom VARCHAR(100) NOT NULL,
            email VARCHAR(150) NOT NULL UNIQUE,
            telephone VARCHAR(20),
            type_permis VARCHAR(50),
            mot_de_passe VARCHAR(255) NOT NULL,
            date_inscription DATE DEFAULT (CURRENT_DATE)
        )"
    );

    $schemaReady = true;
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

    $sslCaAttribute = pdo_mysql_attribute('Pdo\Mysql::ATTR_SSL_CA', 'PDO::MYSQL_ATTR_SSL_CA');
    if ($sslCaAttribute !== null) {
        $options[$sslCaAttribute] = tidb_ssl_ca_path();
    }

    $sslVerifyAttribute = pdo_mysql_attribute(
        'Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT',
        'PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT'
    );
    if ($sslVerifyAttribute !== null) {
        $options[$sslVerifyAttribute] = true;
    }

    $pdo = new PDO($dsn, $user, $password, $options);
    ensure_database_schema($pdo);

    return $pdo;
}

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

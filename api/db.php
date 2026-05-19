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

    $sslCa = env_value('DB_SSL_CA');
    if ($sslCa && defined('PDO::MYSQL_ATTR_SSL_CA')) {
        $options[PDO::MYSQL_ATTR_SSL_CA] = $sslCa;
    }

    return new PDO($dsn, $user, $password, $options);
}

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

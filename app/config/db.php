<?php
function db(): PDO {
    $host = "localhost";
    $dbname = "mvc_eventos";
    $user = "root";
    $pass = "";

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    return new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

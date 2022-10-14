<?php
$pdo = new PDO('sqlite:../database.sqlite');
$pdo->exec("CREATE TABLE IF NOT EXISTS visitas (id INTEGER PRIMARY KEY AUTOINCREMENT, data_acesso TEXT(10) NOT NULL, hora_acesso TEXT(8) NOT NULL);");
$result = $pdo->query("SELECT * FROM visitas ORDER BY id DESC");
foreach ($result as $row) {
    print $row['data_acesso'] . " " . $row['hora_acesso'] . PHP_EOL;
}

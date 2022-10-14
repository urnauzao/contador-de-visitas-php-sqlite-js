<?php
$pdo = new PDO('sqlite:../database.sqlite');
$pdo->exec("CREATE TABLE IF NOT EXISTS visitas (id INTEGER PRIMARY KEY AUTOINCREMENT, data_acesso TEXT(10) NOT NULL, hora_acesso TEXT(8) NOT NULL);");
$query = $pdo->query("SELECT count(*) as total FROM visitas");
$result = $query->fetch();
echo "<h1>Total: {$result['total']}</h1>";

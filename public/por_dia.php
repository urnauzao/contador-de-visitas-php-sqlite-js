<?php
$pdo = new PDO('sqlite:../database.sqlite');
$pdo->exec("CREATE TABLE IF NOT EXISTS visitas (id INTEGER PRIMARY KEY AUTOINCREMENT, data_acesso TEXT(10) NOT NULL, hora_acesso TEXT(8) NOT NULL);");
$result = $pdo->query("SELECT count(*) as total, data_acesso FROM visitas GROUP BY data_acesso ORDER BY data_acesso DESC");
foreach ($result as $row) {
    $__data = date_format(date_create($row['data_acesso']), "d/m/Y");
    print "Dia: " . $__data . " | Total: <strong>" . $row['total'] . "</strong>" . PHP_EOL;
}

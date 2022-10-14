<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('sqlite:../database.sqlite');
$pdo->exec("CREATE TABLE IF NOT EXISTS visitas (id INTEGER PRIMARY KEY AUTOINCREMENT, data_acesso TEXT(10) NOT NULL, hora_acesso TEXT(8) NOT NULL);");
$pdo->exec("INSERT INTO visitas ('data_acesso','hora_acesso') VALUES('" . date("Y-m-d") . "', '" . date("H:i:s") . "');");
return "ok";

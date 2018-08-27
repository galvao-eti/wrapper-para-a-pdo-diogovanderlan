<?php
require '../autoload.php';
use Turma3\Config;
use Turma3\Base;

$config = new Config('mysql', 'localhost', 3306, 'vanderlan', 'root', '');
$dbh = new Base($config);

$stmt = $dbh->preparar(sprintf("INSERT INTO categoria (nome) VALUES ('%s')", $_POST['nome']));
$stmt->execute();

$dbh->desconectar();

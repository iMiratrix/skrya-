<?php
require_once 'dbConnection.php';

$fio = trim($_POST['fio']);


if (!empty($fio)){
    $sql = 'INSERT INTO authors(fio) VALUES(:fio)';
    $params = ['fio' => $fio];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header('Location: http://aqw/index.php ');
}
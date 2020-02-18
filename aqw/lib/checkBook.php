<?php
require_once 'dbConnection.php';

$nameBook = trim($_POST['nameBook']);
$fio = trim($_POST['fio']);


if (!empty($nameBook)) {
//    $sql = 'START TRANSACTION;
//INSERT INTO authors (fio) VALUES (:fio);
//INSERT INTO books (name_book) VALUES (:nameBook);
//COMMIT;';
    $sql = 'INSERT INTO books (name_book) VALUES (:nameBook);';
    $params = ['nameBook' => $nameBook];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header('Location: http://aqw/index.php');
}

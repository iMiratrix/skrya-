<?php
require_once 'dbConnection.php';

$name_book = trim($_POST['nameBook']);
$fio = trim($_POST['fio']);
$id_book = $_POST['id'];


if (!empty($name_book)) {
    $stmt = $pdo->prepare('UPDATE books SET name_book = :name_book WHERE id_book = :id_book');
    $stmt->bindParam(':name_book', $name_book);
    $stmt->bindParam(':id_book', $id_book);
    $stmt->execute();
    header('Location: http://aqw/index.php');
}
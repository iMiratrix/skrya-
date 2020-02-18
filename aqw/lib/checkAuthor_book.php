<?php
require_once 'dbConnection.php';

$id_author = trim($_POST['id_author']);
$id_book = $_POST['id'];


if (!empty($id_author)) {
    $sql = 'INSERT INTO merdge(id_book, id_author) VALUES (:id_book, :id_author)';
    $params = ['id_book' => $id_book, 'id_author' => $id_author];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header('Location: http://aqw/index.php');
}

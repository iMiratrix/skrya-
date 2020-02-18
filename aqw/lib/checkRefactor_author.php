<?php
require_once 'dbConnection.php';
$id_author = $_POST['id_author'];
$id_book = $_POST['id'];

if (!empty($id_author)) {
    $sql = 'DELETE FROM merdge WHERE merdge.id_author = :id_author AND merdge.id_book = :id_book';
    $params = ['id_author' => $id_author, 'id_book' => $id_book];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header('Location: http://aqw/index.php');
}
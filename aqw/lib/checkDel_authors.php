<?php
require_once 'dbConnection.php';
$id_author = $_POST['id_author'];


if (!empty($id_author)) {
    $sql = 'DELETE FROM authors WHERE id_author = :id_author';
    $params = ['id_author' => $id_author];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header('Location: http://aqw/index.php');
}
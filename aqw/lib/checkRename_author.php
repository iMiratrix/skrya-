<?php
require_once 'dbConnection.php';
$fio =($_POST['fio']);
$id_author = $_POST['id'];


if (!empty($fio)) {
    $stmt = $pdo->prepare('UPDATE authors SET fio = :fio WHERE id_author = :id_author');
    $stmt->bindParam(':fio', $fio);
    $stmt->bindParam(':id_author', $id_author);
    $stmt->execute();
    header('Location: http://aqw/index.php');
}
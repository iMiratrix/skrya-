<?php
require_once 'lib/dbConnection.php';

$stmt = $pdo->exec('DELETE FROM books WHERE id_book =' . $_GET['id']);
header('Location: http://aqw/index.php ');



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/4361691883.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
require_once 'lib/dbConnection.php';
$stmt = $pdo->query('SELECT * FROM authors');
while ($data = $stmt->fetch()) {
    $id_author = $data['id_author'];
    $fio = $data['fio'];
    echo <<<HTML
<div class="reg">
<ul>
<li>${fio} </li>
</ul>
    <form action="lib/checkDel_authors.php" method="post">
        <input type="text" hidden name="id_author"  value="${id_author}">     
        <button type="submit" name="btn" class="btn btn-lg btn-primary btn-block">Удалить</button>
    </form>
</div>
HTML;
}
?>
</body>
</html>









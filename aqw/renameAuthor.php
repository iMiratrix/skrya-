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
    <title>Изменить автора</title>
</head>
<body>
<?php
echo <<<HTML
<div class="reg">
    <form action="lib/checkRename_author.php" method="post">
        <input type="text" name="fio" placeholder="Ф.И.О" class="form-control">
        <input type="text" hidden name="id" value="${_GET['id']}">
        <button type="submit" name="btn" class="btn btn-lg btn-primary btn-block">Изменить</button>
    </form>
</div>
HTML;
?>
</body>
</html>



<?php
require_once 'lib/dbConnection.php';
session_start();
?>
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
    <title>Magaz</title>
</head>
<body>
<header>

    <div class="wrap-logo">
        <a href="index.php" class="logo">Magaz</a>
    </div>
    <nav>
    </nav>

</header>

<main>
    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="addBook.php" class="list-group-item">Добавить книгу</a>
                    <a href="addAuthor.php" class="list-group-item">Добавить автора</a>
                    <a href="delAuthor.php" class="list-group-item">Удалить автора</a>
                </div>
            </div>
            <div class="col-md-8 products">
                <div class="row">
                    <?php
                    $stmt = $pdo->query('SELECT books.*,GROUP_CONCAT(authors.fio)AS fio,GROUP_CONCAT(authors.id_author)AS id_author,merdge.id_author FROM books LEFT JOIN merdge ON merdge.id_book = books.id_book LEFT JOIN authors ON authors.id_author = merdge.id_author GROUP BY books.id_book ORDER BY books.id_book ');
                    while ($data = $stmt->fetch()) {
                        $nameBook = $data['name_book'];
                        $fio = $data['fio'];
                        echo <<<HTML
                    <div class="col-sm-4">
                        <div class="product">
                            <div class="product-img" id="product-img">
                               <img src="img/scale_1200.webp" alt="">
                            </div>
                            <p class="product-title" id="product-title">${nameBook} <a href="refactor.php?id=${data['id_book']}">⟳</a></p>
                            <p class="product-desc" id="product-desc">${fio}</p>
                            <a href="addAuthor_book.php?id=${data['id_book']}">Добавить автора книге</a>   
                             <a href="refactor_author.php?id=${data['id_book']}">Изменить автора</a>  
                             <a href="del.php?id=${data['id_book']}">Удалить</a>                      
                        </div>
                    </div>
HTML;

                    }
                    ?>
                </div>
            </div>
        </div>

    </div>


</main>
<footer>
    <a>magaz</a>
</footer>
</body>
</html>


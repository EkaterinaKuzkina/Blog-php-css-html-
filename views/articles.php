<DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Блог Бложище</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Блог Бложище</h1>
            <a href="admin">Панель администратора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h2>
                        <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?>
                        </a>
                    </h2>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>Тестовый блог <br>
                Copyright &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>
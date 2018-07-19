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
            <div>
                <div class="article">
                    <h2>
                       <?=$article['title']?>
                    </h2>
                    <em>Опубликовано: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                </div> 
            </div>
            <footer>
                <p>Тестовый блог <br>
                Copyright &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>
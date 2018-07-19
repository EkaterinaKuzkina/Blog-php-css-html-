<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Блог Бложище</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Блог Бложище</h1>
            <div class="input-group mb-3">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-control" autofocus required>
                    </label>
                     <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-control"  required>
                    </label>
                     <label>
                        Содержимое
                         <textarea  name="content" class="form-control" required><?=$article['content']?></textarea>
                    </label>
                     <input type="submit" value="Сохранить" class="btn"  >
                </form>
            </div>
            <footer>
                <p>Тестовый блог <br>
                Copyright &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>
</DOCTYPE>
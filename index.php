<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Гостюва книга</title>
  </head>
  <body>
    <?php require_once('view/header.php'); ?>
    <div class="blog">

      <?php

        require_once('metods/database.php');
        require_once('metods/fundb.php');

        $db = new DataBase('guestbook', 'admin', 'admin');

        if (!empty($_GET['id'])) {
          $id = $_GET['id'];
          $article = SQL::article_get($db->get_db(), $id);
          require_once('view/article.php');

        } else {
          $article = SQL::article_all($db->get_db());
          require_once('view/articles.php');
        }

      ?>

    </div>
    <?php require_once('view/footer.php'); ?>
  </body>
</html>

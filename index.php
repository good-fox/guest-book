<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Гостюва книга</title>
  </head>
  <body>
    <?php require_once('view/header.php'); ?>
    <div class="blog">
      <h1>Text blog.)</h1>

      <?php

        require_once('metods/database.php');

        $db = new DataBase;
        $article = SQL::article_all($db->get_db());

        require_once('view/article.php');
      ?>

    </div>
    <?php require_once('view/footer.php'); ?>
  </body>
</html>

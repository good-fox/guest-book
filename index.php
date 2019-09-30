<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Гостюва книга</title>
  </head>
  <body>
    <?php require_once('views/header.php'); ?>
    <div class="blog">
      <h1>Text blog.)</h1>

      <?php

        require_once('metods/database.php');

        $db = new DataBase;
        
      ?>

    </div>
    <?php require_once('views/footer.php'); ?>
  </body>
</html>

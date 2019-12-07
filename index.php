<html lang="ru" dir="ltr">

  <?php require_once('head.php'); ?>

  <body>
    <?php require_once('view/header.php'); ?>
    <div class="blog">

      <?php

        require_once('metods/database.php');
        require_once('metods/fundb.php');

        $db = new DataBase('guestbook');

        if (!empty($_GET['id']) or !empty($_GET['action'])) {

          if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $article = SQL::article_get($db->get_db(), $id);
            $comment = SQL::comment_get($db->get_db(), $id);

            require_once('view/article.php');

          } elseif ($_GET['action'] == 'add') {
            require_once('view/article_add.php');
            //SQL::article_add($db->get_db(), $name, $email, $title, $date, $content);
          } elseif ($_GET['action'] == 'admin') {
            $admin = true;
            require_once('view/admin.php');
          }

        } else {
          $article = SQL::article_all($db->get_db());
          require_once('view/articles.php');
        }

      ?>

    </div>
    <?php require_once('view/footer.php'); ?>
  </body>
</html>

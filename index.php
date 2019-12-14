<html lang="ru" dir="ltr">

  <?php
    require_once('head.php');
    session_start();
   ?>

  <body>
    <?php require_once('view/header.php'); ?>
    <div class="blog">

      <?php
        require_once('metods/database.php');
        require_once('metods/fundb.php');

        $db = new DataBase('guestbook');

        if (!empty($_GET['id']) or !empty($_GET['action'])) {

          if ((!empty($_GET['id'])) and (!empty($_GET['action'])) and (!empty($_SESSION['admin']))) {
                if (($_SESSION['admin']) and ($_GET['action'] == 'delete')){
                  $id = $_GET['id'];
                  SQL::article_delete($db->get_db(), $id);
                  header("Location: index.php"); }

          } elseif (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $article = SQL::article_get($db->get_db(), $id);
            $comment = SQL::comment_get($db->get_db(), $id);
            require_once('view/article.php');

          } elseif ($_GET['action'] == 'add') {
            require_once('view/article_add.php');
            //SQL::article_add($db->get_db(), $name, $email, $title, $date, $content);

          } elseif ($_GET['action'] == 'admin') {
            require_once('view/admin.php');

          } elseif ($_GET['action'] == 'exit') {
            $_SESSION['admin'] = false;
            header("Location: index.php");
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

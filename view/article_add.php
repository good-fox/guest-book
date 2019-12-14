<?php

if (!empty($_POST)) {
  $title = $_POST['title'];
  $date = date('Y-m-d'); //h:i:s');
  $content = $_POST['content'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  SQL::article_new($db->get_db(), $name, $email, $title, $date, $content);
  header("Location: index.php");
}

?>

<div>
  <form action="index.php?action=<?=$_GET['action']?><?php if (!empty($_GET['id'])) echo "&id=" . $_GET['id'];?>" method="post">
    <label>
      Имя
      <input type="text" name="name" value="<?php if (!empty($article['name'])) echo $article['name'];?>" class="form-item" autofocus required>
    </label>
    <label>
      e-mail
      <input type="email" name="email" value="<?php if (!empty($article['email'])) echo $article['email'];?>" class="form-item" autofocus required>
    </label>
    <label>
      Назва
      <input type="text" name="title" value="<?php if (!empty($article['title'])) echo $article['title'];?>" class="form-item" autofocus required>
    </label>
    <label>
      Текст
      <textarea name="content" class="form-item" required><?php if (!empty($article['content'])) echo $article['content'];?></textarea>
    </label>
    <input type="submit" value="Зберигти" class="btn">
  </form>
</div>

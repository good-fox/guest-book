<?php

if (!empty($_POST)) {
  $date = date('Y-m-d'); //h:i:s');
  $content = $_POST['content'];
  $name = $_POST['name'];
  echo $date;
  SQL::comment_new($db->get_db(), $name, $date, $content, $id);
  header("Location: index.php?id=$id");
}

?>

<div>
  <form action="index.php?action=<?=$_GET['action']?><?php if (!empty($_GET['id'])) echo "&id=" . $_GET['id'];?>" method="post">
    <label>
      Имя
      <input type="text" name="name" value="" class="form-item" autofocus required>
    </label>
    <label>
      Текст
      <textarea name="content" class="form-item" required></textarea>
    </label>
    <input type="submit" value="Зберигти" class="btn">
  </form>
</div>

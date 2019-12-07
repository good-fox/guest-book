<?php

if (!empty($_POST)) {
  $pas = $_POST['pas'];
  $log = $_POST['log'];

  if ($log == 'admin' && $pas == 'admin') {
    header("Location: index.php");
  } else {
    echo "<p>Пароль або логін не вірні</p>";
  }

}

?>

<div>
  <form action="index.php?action=<?=$_GET['action']?><?php if (!empty($_GET['id'])) echo "&id=" . $_GET['id'];?>" method="post">
    <label>
      Login
      <input type="text" name="log" value="" class="form-item" autofocus required>
    </label>
    <label>
      Password
      <input type="text" name="pas" value="" class="form-item" autofocus required>
    </label>
    <input type="submit" value="Вход" class="btn">
  </form>
</div>

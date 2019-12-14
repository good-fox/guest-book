<h3>
  <em>
    <a href="../guest-book/index.php">Гостьова книга</a>
    ________________
    <a href="../guest-book/index.php?action=add">(Оставить отзыв)</a>
    ________________
    <?php
    if (!empty($_SESSION['admin'])) {
      if (!$_SESSION['admin'])
        echo "<a href=\"../guest-book/index.php?action=admin\">Вход</a>";
      elseif ($_SESSION['admin'])
        echo '<a href="../guest-book/index.php?action=exit">Вихід</a>';
    } else
      echo "<a href=\"../guest-book/index.php?action=admin\">Вход</a>";
    ?>
  </em>
</h3>

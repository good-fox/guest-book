<h2>
  <em>
    <a href="../guest-book/index.php">Главная страница</a>
    ________________
    <a href="../guest-book/index.php?action=add">(Оставить отзыв)</a>
    ________________
    <?php if (!$_SESSION['admin']): ?>
      <a href="../guest-book/index.php?action=admin">Вход</a>
    <?php endif; ?>

    <?php if ($_SESSION['admin']): ?>
      <a href="../guest-book/index.php?action=exit">Вихід</a>
    <?php endif; ?>
  </em>
</h2>

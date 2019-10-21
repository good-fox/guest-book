<div class="article">
  <h1><?=$article['title']?></h1>
    <em>Опубліковано: </em>
    <strong><?=$article['name']?> </strong>
    <em>- (<?=$article['email']?>) : <?=$article['date']?>.</em>
    <p><?=$article['content']?></p>
</div>

<div class="add_comment">
  <a href="../guest-book/index.php?id=<?=$id?>&action=add-comment">Оставить коментарий</a>

  <?php
    if (!empty($_GET['action']))
      if ($_GET['action'] == 'add-comment') {
        require_once('comment_add.php');
      }
   ?>

</div>

<div class="comment">
  <h2>
    <em>Коментарии</em>
  </h2>

  <?php foreach ($comment as $c): ?>
    <em>Опубліковано: </em>
    <strong><?=$c['name']?> </strong>
    <em> : <?=$c['date']?>.</em>
    <p><?=$c['content']?></p>
  <?php endforeach; ?>

</div>

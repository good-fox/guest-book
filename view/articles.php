<div>
  <?php foreach ($article as $a): ?>
  <div class="article">
    <h2><a href="?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
    <em>Опубліковано: </em>
    <strong><?=$a['name']?> </strong>
    <em>- (<?=$a['email']?>) : <?=$a['date']?>.</em>
    <p><?=$a['content']?></p>
    <p><?php
    if (!empty($_SESSION['admin'])) {
      if ($_SESSION['admin']) {
        $id_temp = $a['id'];
        echo "<a href='../guest-book/index.php?id=$id_temp&action=delete'>Удалить отзив</a>"; 
      }
    } ?></p>
  </div>
  <?php endforeach; ?>
</div>

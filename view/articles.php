<div>
  <?php foreach ($article as $a): ?>
  <div class="article">
    <h2><a href="?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
    <em>Опубліковано: </em>
    <strong><?=$a['name']?> </strong>
    <em>- (<?=$a['email']?>) : <?=$a['date']?>.</em>
    <p><?=$a['content']?></p>
  </div>
  <?php endforeach; ?>
</div>

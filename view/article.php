<div class="article">
  <h1><?=$article['title']?></h1>
    <em>Опубліковано: </em>
    <strong><?=$article['name']?> </strong>
    <em>- (<?=$article['email']?>) : <?=$article['date']?>.</em>
    <p><?=$article['content']?></p>
</div>

<div class="add_comment">
  
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

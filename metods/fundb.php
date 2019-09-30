<?php

/**
 *  Здесь я пропишу методы для извлечения и добавления
 *  в базу данних информацыи по отзывам в гостевой книге.)
 */

class SQL
{

  static public function article_all($db) {
    $query = "SELECT * FROM `article` ORDER BY id DESC";
    $result = mysqli_query($db, $query);

    $n = mysqli_num_rows($result);
    $article = array();

    for ($i=0; $i < $n; $i++) {
      $row = mysqli_fetch_assoc($result);
      $article[] = $row;
    }

    return $article;
  }

  static public function article_get($db, $id){
  $query = "SELECT * FROM `article` WHERE id=$id";
  $result = mysqli_query($db, $query);

  $article = mysqli_fetch_assoc($result);

  return $article;
}

}


?>

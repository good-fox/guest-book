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

  static public function article_new($db, $name, $email, $title, $date, $content) {
    $name = trim($name);
    $email = trim($email);
    $title = trim($title);
    $content = trim($content);

    if ($title == '')
      return false;

    $str = "INSERT INTO `article` (name, email, title, date, content) VALUES ('%s', '%s', '%s', '%s', '%s')";
    $query = sprintf($str,
      mysqli_real_escape_string($db, $name),
      mysqli_real_escape_string($db, $email),
      mysqli_real_escape_string($db, $title),
      mysqli_real_escape_string($db, $date),
      mysqli_real_escape_string($db, $content));

    $result = mysqli_query($db, $query);

    if (!$result)
      die(mysqli_error($db));

    return true;
  }

  static public function comment_get($db, $id) {
    $query = "SELECT * FROM `comment` WHERE id_article=$id";
    $result = mysqli_query($db, $query);

    $n = mysqli_num_rows($result);
    $comment = array();

    for ($i=0; $i < $n; $i++) {
      $row = mysqli_fetch_assoc($result);
      $comment[] = $row;
    }

    return $comment;
  }

  static public function comment_new($db, $name, $date, $content, $id) {
    $name = trim($name);
    $content = trim($content);

    $str = "INSERT INTO `comment` (name, date, content, id_article) VALUES ('%s', '%s', '%s', '%s')";
    $query = sprintf($str,
      mysqli_real_escape_string($db, $name),
      mysqli_real_escape_string($db, $date),
      mysqli_real_escape_string($db, $content),
      mysqli_real_escape_string($db, $id));

    $result = mysqli_query($db, $query);

    if (!$result)
      die(mysqli_error($db));

    return true;
  }

}

?>

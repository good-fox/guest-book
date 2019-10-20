<?php

/*
* Здесь я прописал клас для создания обекта подключения
* к базе данных.)
*/

class DataBase {
  private $server;
  private $username;
  private $password;
  private $database;
//  private $db;

  public function __construct($database = 'guestbook', $username = 'root', $password = '', $server = 'localhost') {
  	$this->server = $server;
  	$this->username = $username; //имя пользователя для доступа к базе данных
  	$this->password = $password; //пароль для доступа к базе данных
  	$this->database = $database; //имя базы данных
//  	$this->db = mysqli_connect($this->dbserver, $this->username, $this->password, $this->database);
  }

  public function get_db() {
    $link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
//    mysqli_query($db,"SET NAMES utf8");

    return $link;
  }

}

?>

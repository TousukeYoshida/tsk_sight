<?php
  //DB接続情報を定数として定義しDBに接続
  define('DSN','mysql:dbname=tskblogdb;host=127.0.0.1');
  define('USER','root');
  define('PASS','deed74');
  //DB接続
  try{
    $dbh = new PDO(DSN, USER, PASS);
  }catch(PDOException $e){
    echo '接続エラー：'.$e->getMessage();
  }

?>

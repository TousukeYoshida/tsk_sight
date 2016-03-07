<?php
  session_start();

//SESSION変数クリア
  unset($_SESSION['img_file']);
  unset($_SESSION['title']);
  unset($_SESSION['news']);

//リダイレクト
  header('Location: ./index.php');

?>


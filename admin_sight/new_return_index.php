<?php
  session_start();
//SESSION変数をクリア
  unset($_SESSION['img_file']);
  unset($_SESSION['title']);
  unset($_SESSION['news']);

  header('Location: ./index.php');

?>


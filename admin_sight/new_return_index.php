<?php
  session_start();
<<<<<<< HEAD
//SESSION変数をクリア
=======

//SESSION変数クリア
>>>>>>> 395fe418dec26510daf3c3366bd066eb4f79cc03
  unset($_SESSION['img_file']);
  unset($_SESSION['title']);
  unset($_SESSION['news']);

<<<<<<< HEAD
=======
//リダイレクト
>>>>>>> 395fe418dec26510daf3c3366bd066eb4f79cc03
  header('Location: ./index.php');

?>


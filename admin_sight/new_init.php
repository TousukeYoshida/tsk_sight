<?php
  session_start();
  require_once(__DIR__.'/../lib/function.php');

  unset($_SESSION['img_file1']);
  unset($_SESSION['img_file2']);
  unset($_SESSION['img_file3']);
  unset($_SESSION['img_file4']);
  unset($_SESSION['img_file5']);
  unset($_SESSION['img_file6']);

//upload_tmpフォルダクリア
  $path='C:\\xampp\\htdocs\\tsk_sight\\upload_tmp\\';
  deleteData($path);

  header('Location: ./new_input.php');

?>


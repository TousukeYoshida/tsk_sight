<?php
  session_start();
  echo '<pre>';
  print "title=".$_SESSION['title'].'</p>';
  print "news=".$_SESSION['news'].'</p>';
  var_dump($_SESSION['img_file1']);
  var_dump($_SESSION['img_file2']);
  var_dump($_SESSION['img_file3']);
  var_dump($_SESSION['img_file4']);
  var_dump($_SESSION['img_file5']);
  var_dump($_SESSION['img_file6']);
  echo '</pre>';

//  require_once(__DIR__.'/../lib/access_db.php');
  
//  $stmt=$dbh-> prepare();
//  $stmt->execute();
  
//  header('Location:'.__DIR__.'/new_result.php');

?>


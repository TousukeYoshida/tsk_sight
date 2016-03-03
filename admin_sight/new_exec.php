<?php
  session_start();
  
//debug start
  echo '<pre>';
  print '<p>img_flag='.$_SESSION['img_flag'].'</p>';
  print '<p>title='.$_SESSION['title'].'</p>';
  print '<p>news='.$_SESSION['news'].'</p>';
  echo '</pre>';

  echo '<pre>';
  if ($_SESSION['img_flag']==='yes'):
    foreach($_SESSION['img_file'] as $val):
      var_dump($val);
    endforeach;
  endif;
  echo '</pre>';
//debug end

//image file procedure
  if ($_SESSION['img_flag']==='yes'):
    $dstDir='C:\\xampp\\htdocs\\tsk_sight\\upload_img\\';
    foreach($_SESSION['img_file'] as $key => $val):
      $srcFile= $val;
      $file_obj=new SplFileInfo($val);
      $filename=$file_obj->getBasename();
      $dstFile=$dstDir.$filename;

      print '<p>'.$srcFile.'</p>'; //debug
      print '<p>'.$dstFile.'</p>'; //debug
      

// image files move upload_tmp -> upload_img
      rename($srcFile,$dstFile);

//移動先のパスをセッションに保存
      $_SESSION['img_path'][$key]=$dstFile;
    endforeach;
  endif;


//  require_once(__DIR__.'/../lib/access_db.php');
  
//  $stmt=$dbh-> prepare();
//  $stmt->execute();
  
//  header('Location:'.__DIR__.'/new_result.php');

?>


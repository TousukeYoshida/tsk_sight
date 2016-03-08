<?php
//画像ファイル表示用
  $dir = '../upload_img'; // 画像ディレクトリをここに記述
  $imgName = $dir.'/'.basename( $_REQUEST['img'] );

  header('Content-Length: '.filesize($imgName));
  header('Content-Type: image/' . $_REQUEST['ext']);

  if( is_file( $imgName ) && file_exists( $imgName ) ):
    print( file_get_contents( $imgName ) );
  endif;
?>
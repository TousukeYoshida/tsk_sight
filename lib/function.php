<?php
//フォルダ内のファイルを全て削除する関数
//$dirは該当ファイルがあるディレクトリの絶対パス
//消したくないファイルはif($fileName!=)の条件に追加する
  function deleteData ( $dir ) {
    if ( $dirHandle = opendir ( $dir )) :
      while ( false !== ( $fileName = readdir ( $dirHandle ) ) ) :
        if ( $fileName != "." && $fileName != ".." ) :
            unlink ( $dir.$fileName );
        endif;
      endwhile;
      closedir ( $dirHandle );
    endif;
  }
?>



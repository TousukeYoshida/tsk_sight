<?php
  session_start(); //セッション開始

//文字列の最初と最後の空白を取り除く
  $_POST['title']=trim($_POST['title']);
  $_POST['news']=trim($_POST['news']);

//サニタイジング
  foreach($_POST as $key => $val):
    $_POST[$key] = htmlspecialchars($val,ENT_QUOTES,"UTF-8");
  endforeach;

//未入力、空白文字列チェック
  $err_msg=null;
  foreach($_POST as $key=>$val):
    if($val==false):
      if($key==='title'){
        $err_msg[$key]='タイトルがありません';
      }elseif($key==='news'){
        $err_msg[$key]='記事がありません';
      }
    endif;
  endforeach;

// セッションにデータを保存
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['news'] = $_POST['news'];

//画像ファイルチェック
  for($i=1;$i<=6;$i++):
    $key='img_file'.$i;
    if($_FILES[$key]['name']!==''):
      $filename=new SplFileInfo($_FILES[$key]['name']);
      $chk_ext=$filename->getExtension();
      if($chk_ext==='jpg' || $chk_ext==='jpeg' || $chk_ext==='gif' || $chk_ext==='png'):
//アップロードされた画像を移動
        
      else:
        $err_msg[$key]='画像ファイル'.$i.'は許可された画像ファイルではありません';
      endif;
    endif;
  endfor;
  
// セッションにデータを保存
  $_SESSION['img_file1'] = $_FILES['img_file1']['tmp_name'];
  $_SESSION['img_file2'] = $_FILES['img_file2']['tmp_name'];
  $_SESSION['img_file3'] = $_FILES['img_file3']['tmp_name'];
  $_SESSION['img_file4'] = $_FILES['img_file4']['tmp_name'];
  $_SESSION['img_file5'] = $_FILES['img_file5']['tmp_name'];
  $_SESSION['img_file6'] = $_FILES['img_file6']['tmp_name'];

//エラーありの場合はリダイレクト

  if(is_array($err_msg)):
    $_SESSION['errors']=$err_msg;
    header('Location: ./new_input.php');
  endif;

  require_once("./header.php"); //ヘッダー呼び出し
 ?>

        <section id="window_name">
          <p>新規投稿確認</p>
        </section>
    </header>

    <main>
<!--
<?php
	echo "<pre>";
	var_dump( $_POST );
	var_dump( $_FILES );
	echo "</pre>";
?>
-->
      <p>タイトル</p>
      <p><?php print $_POST["title"]; ?></p>
      <p>記事</p>
      <p><?php print $_POST["news"]; ?></p>
      <p>添付ファイル１：<?php print $_FILES["img_file1"]["name"]; ?></p>
      <p>添付ファイル２：<?php print $_FILES["img_file2"]["name"]; ?></p>
      <p>添付ファイル３：<?php print $_FILES["img_file3"]["name"]; ?></p>
      <p>添付ファイル４：<?php print $_FILES["img_file4"]["name"]; ?></p>
      <p>添付ファイル５：<?php print $_FILES["img_file5"]["name"]; ?></p>
      <p>添付ファイル６：<?php print $_FILES["img_file6"]["name"]; ?></p>
      <br>
      <form action="new_exec.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="投稿">
      </form>
    </main>
    <footer>
      <section id=footer_cont>
        <button onclick="location.href='./new_input.php'">入力をやり直す</button>
      </section>
    </footer>
  </body>
</html>


<?php
  session_start(); //セッション開始

//POST変数->$news_id
  $news_id=$_POST['news_id'];

//DB処理 

//オブジェクト $dbh作成
  require_once(__DIR__.'/../lib/access_db.php');

//SQLコマンド 準備
  $sql_cmd='SELECT * FROM news WHERE news_id='.$news_id;

  echo '<pre>';
  var_dump($sql_cmd);
  echo '</pre>';


//DB読込処理 news
  $news_rec=$dbh-> query($sql_cmd);

//SQLコマンド 準備
  $sql_cmd='SELECT * FROM images WHERE news_id='.$news_id;
//DB読込処理 images
  $images_rec=$dbh-> query($sql_cmd);

/*
  echo '<pre>';
  var_dump($news_rec);
  echo '</pre>';
  echo '<pre>';
  var_dump($images_rec);
  echo '</pre>';
*/

  require_once("./header.php"); //ヘッダー呼び出し
 ?>

        <section id="window_name">
          <p>投稿変更</p>
        </section>
    </header>

    <main>
      <form action="update_chk.php" method="post" enctype="multipart/form-data">
      <?php
        foreach($news_rec as $val):
      ?>
        <p>記事no:<strong><?php print $val['news_id']; ?></strong></p>
        <p><label>タイトル</label></p>
        <input type="text" name="title" value=<?php print $val['title']; ?>>
        <p>記事</p>
        <textarea cols="80" rows="10"><?php print trim($val['news']); ?></textarea>

        <p>画像ファイル：<?php ($val['img_flag']==='yes') ? print '有' : print '無'; ?></p>
        <p class="char-red">※画像を削除する場合は書く画像の削除にチェックを入れる</p>
      <?php
        endforeach;
        if ($val['img_flag']==='yes'):
          foreach($images_rec as $val):
//ファイル名を取得
            $file_obj=new SplFileInfo($val['image_path']);
            $fileName=$file_obj->getBasename();
      ?>
        <img width="128" height="128" alt="添付画像" src=<?php print '../upload_img/'.$fileName; ?>>
        <input type="checkbox" name="del" value="del">削除
        <?php endforeach;endif; ?>

        <br>
        <input type="submit" name="submit" value="変更">
      </form>
    </main>
    <footer>
      <section id=footer_cont>
        <button onclick="location.href='./index.php'">変更を中止する</button>
      </section>
    </footer>
  </body>
</html>


<?php
  session_start(); //セッション開始
  require_once("./header.php"); //ヘッダー読込
?>

        <section id="window_name">
          <p>新規投稿</p>
        </section>
    </header>

    <main>
      <form action="new_chk.php" method="post" enctype="multipart/form-data">
        <p><label>タイトル</label>
        <input class="input_title" type="text" name="title" size="50" required value="<?=$_SESSION['title'] ?>"></p>
        <p><label>記事</label></p>
        <textarea class="input_news" name="news" cols="80" rows="10" required value="">
          <?php print $_SESSION['news']; ?>
        </textarea><br>
        <p>画像ファイル1：<input class="sel_files" type="file" name="img_file1"></p>
        <p>画像ファイル2：<input class="sel_files" type="file" name="img_file2"></p>
        <p>画像ファイル3：<input class="sel_files" type="file" name="img_file3"></p>
        <p>画像ファイル4：<input class="sel_files" type="file" name="img_file4"></p>
        <p>画像ファイル5：<input class="sel_files" type="file" name="img_file5"></p>
        <p>画像ファイル6：<input class="sel_files" type="file" name="img_file6"></p>
        <br>
        <input type="submit" name="submit" value="投稿">
      </form>
      <?php
        if( isset($_SESSION['errors'])):
      ?>
      <hr>
      <p class="char-red"><strong>入力エラー！！</strong></p>
      <?php
          foreach($_SESSION['errors'] as $val):
      ?>
         <p class="char-red"><?php echo $val; ?></p>
      <?php
          endforeach;
        endif;
        $_SESSION['errors']=null;
        $_SESSION['title']=null;
        $_SESSION['news']=null;
        
      ?>
    </main>
    <footer>
      <section id=footer_cont>
        <button onclick="location.href='./index.php'">処理を中止し、管理画面に戻る</button>
      </section>
    </footer>
  </body>
</html>


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
        <input class="input_title" type="text" name="title" size="50" required value="<?php print (isset($_SESSION['title'])) ? $_SESSION['title'] : ''; ?>"></p>
        <p><label>記事</label></p>
        <textarea class="input_news" name="news" cols="80" rows="10" required ><?php print (isset($_SESSION['news'])) ? $_SESSION['news']:''; ?></textarea><br>
        <p>画像ファイルを添付する<input class="sel_files" type="file" name="img_file[]" multiple></p>
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


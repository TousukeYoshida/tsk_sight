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

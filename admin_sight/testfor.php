<?php
  $data=array(
    'img_file1'=>'img_data1',
    'img_file2'=>'img_data2',
    'img_file3'=>'img_data3',
    'img_file4'=>'img_data4',
    'img_file5'=>'img_data5',
    'img_file6'=>'img_data6'
  );

  for ($i=1;$i<7;$i++):
    print $data['img_file'.$i];
    print "<br>";
  endfor;
?>

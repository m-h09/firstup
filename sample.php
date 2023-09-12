<?php
 $tan = [1,2,3];

 $nizi = [
    ['松下',29,'男性'],
    ['高田',25,'男性'],
    ['岡田',25,'女性']
 ];

 $ren = [
  'name' => '田中',
  'age' =>  24,
  'codelang' => 'HTML'
 ];


 echo $tan[0];
 echo PHP_EOL;
 echo '私の名前は'.$nizi[0][0].'です。';
 echo '年齢は'.$nizi[0][1].'歳'.$nizi[0][2].'です。';
 echo PHP_EOL;
 echo $ren['name'];

?>


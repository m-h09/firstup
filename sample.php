<?php
for ($i = 1; $i < 14; $i++) {
   if(!($i % 2 )==1) {
     continue;
   }
   
   
   echo $i .' ';
   echo PHP_EOL;
   
}
echo "for_out";

?>
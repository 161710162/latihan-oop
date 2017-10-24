<?php

require_once 'robot.php';

 $robot1=new robot('aaaaaaa',78);
 $robot2=new robot('ngok ngok',98);
  $robot3=new robot('ngik ngik',100);
echo"suara robot1 :".$robot1->suara.'<br>';
echo"berat robot1 :".$robot1->berat.'<br>';
echo"suara robot2 :".$robot2->suara.'<br>';
echo"berat robot2 :".$robot2->berat.'<br>';
echo"suara robot3 :".$robot3->suara.'<br>';
echo"berat robot3 :".$robot3->berat;

?>
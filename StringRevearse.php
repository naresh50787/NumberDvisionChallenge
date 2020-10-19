<?php

$str = 'Naresh';
$strrev ='';
for($i=strlen($str)-1; $i>=0; $i--){
$strrev.=$str[$i];
  //echo $str[$i];
}
echo $strrev;
?>

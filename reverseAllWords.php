<?php
/*Write a program to reverse all words but not string.
Let's assume string is: "I Have got a program to reverse the word but not string."
We wants to do: "I evaH tog a margorp ot esrever eht drow ton gnirts".
*/
$tempSentence = 'I Have got a program to reverse the word but not string';

$tempArray = explode(' ', $tempSentence);

 $str = '';
foreach($tempArray as $key => $value){
$tempStr = $value;
$length = strlen($tempStr);
for($i=$length-1; $i>=0; $i--){
if($i == $length-1){
$str = $str . strtoupper($tempStr[$i]);
}else{
$str = $str . strtolower($tempStr[$i]);
}
}
$str = $str . ' ';
}

echo rtrim($str);
?>

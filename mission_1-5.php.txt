<?php
$filename='mission_1-4-2.txt';
//echo $filename;

$fp=fopen($filename,'a');

fwrite($fp,'フォームからデータの送信2');

fclose($fp);

?>
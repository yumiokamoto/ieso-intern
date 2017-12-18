<?php
$filename='mission_1-4-2.txt';
echo $filename;
echo getcwd();

$fp=fopen($filename,'w');


fwrite($fp,'フォームからデータの送信');

fclose($fp);

?>
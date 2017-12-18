<?php
$filename='mission_1-4-2.txt';
echo $filename;

$fp=fopen($filename,'a');


fwrite($fp,'追記'.PHP_EOL);

fclose($fp);

$a = array("フォームからデータの送信","追記");

foreach($a as $value){
echo $value  ."<br />" ;
}
?>
<?php
$filename='mission_1-4-2.txt';
echo $filename;

$fp=fopen($filename,'a');


fwrite($fp,'�ǋL'.PHP_EOL);

fclose($fp);

$a = array("�t�H�[������f�[�^�̑��M","�ǋL");

foreach($a as $value){
echo $value  ."<br />" ;
}
?>
<?php
$filename='mission_1-4-2.txt';
echo $filename;
echo getcwd();

$fp=fopen($filename,'w');


fwrite($fp,'�t�H�[������f�[�^�̑��M');

fclose($fp);

?>
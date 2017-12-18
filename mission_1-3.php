<?php
$fp=fopen("kadai2.txt","r");
while($line=fgets($fp)){
echo $line;
}
fclose($fp);
?>
/*
<?php
$delete=$_POST["delete"];

if(empty($delete)){}
else{
  $fp=fopen("mission_2-5.txt","w+");
  for($i = 0; $i < count($dataFile); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$dataFile[$i]);
   if("$num"!="$delete"){
		fwrite($fp,"$dataFile[$i]");
	}
   else{

		fwrite($fp,"çÌèúÇ≥ÇÍÇ‹ÇµÇΩ"."\n");
	}
  }
}
$dataFile = file("mission_2-5.txt");
for($i = 0; $i < count($dataile); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$dataFile[$i]);
    echo $num."  ".$name."  ".$comment."  ".$time."  <br />\n";
}

$edit = $_POST['edit'];

if(isset($_POST['edit']))
{
	$dataFile = file("mission_2-5.txt");
	for($l = 0;$l <count($dataFile); ++$l){
	list($num) = explode("<>",$file_edit[$l]);
	if($dataFile[0] == ($_POST['text']))
	{
	$dataFile = $file_edit[$l];
	
	if("$num" != "$edit");{
		fwrite($fp,"$dataFile[$l]");
		fwrite($fp,"ÇÕï“èWÇ≥ÇÍÇ‹ÇµÇΩÅB"."\n");
	}
	}
}
$dataFile = file("mission_2-5.txt");
for($l = 0; $l < count($dataile); ++$l ){
    list($num)=explode("<>",$dataFile[$l]);
    echo $num."  "."<br />\n";
*/



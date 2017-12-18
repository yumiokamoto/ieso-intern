<html>
<body>
<form method = "post">
	<p>編集対象番号 :<input type = "text" name = "edit"></p>
	<input type = "submit" value = "編集">
</form>
</body>
</html>

<?php
$edit=$_POST['edit'];
$A= file("mission_2-2.txt");

if(isset($_POST['edit']))
{
	$file_edit = file("mission_2-2.txt");
	for($l = 0;$l <count($file_edit); ++$l){
	$editData = explode("<>",$file_edit[$l]);
	if($editData[0] == ($_POST['text']))
	{
	$edit_data = $file_edit[$l];

	echo ($_POST['text']. "は編集されました。");
	echo ($edit_data);
	}
	}
}


$ret_array = file($file_name);
for($i = 0;$i<count($ret_array); ++$i){
	$piece = explode("<>", $ret_array[$i]);
		for($j = 0; $j < 4; ++$j){
	  echo ($piece[$j]);
	  }
	echo "<br/>\n";
}
?>

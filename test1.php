<html>
<head>
</head>
<body>
<form method="POST" action="mission_2-2.php">
    <div>
	<label for="user">名前:</label>
	<input type="text" name="user" />
    </div>
    <div>
	<label for="message">コメント:</label>
	<textarea id="message"></textarea>
    </div>
    <div>
	<input type="submit"value="送信">
    </div>
</form>

<?php
touch("mission_2-2.txt");
$fp = fopen("mission_2-2.txt", "r+");

$message =($_POST['massage']);

$user =($_POST['user']);

$postedAt =date('Y-m-d H:i:s');

$newData =(sizeof(file($dataFile))+1)."<>".$message."<>".$user."<>".$postedAt."\n";

fclose($fp);
?>

<?php

$data=file_get_contents('mission_2-2.txt');
$data_array = explode( "<>", $data );
$cnt = count($data_array);
for( $i=0;$i<$cnt;$i++ )
{
echo"\n";
echo($data_array[$i]);
}

?>

</body>
</html>	

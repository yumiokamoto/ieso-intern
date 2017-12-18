
<html>
<head>
</head>
<body>
<form method="POST">
    <div>
	<label for="user">名前:</label>
	<input type="text" name="user" />
    </div>
    <div>
	コメント <input type = "text" name="message" >
    </div>
    <div>
	<input type="submit"value="送信">
    </div>
</form>

<?php
touch("mission_2-2.txt");
$fp = fopen("mission_2-2.txt", "r+");

$message =($_POST['message']);


$user =($_POST['user']);

$postedAt =date('Y-m-d H:i:s');

$count = 0;
while(fgets($fp) !== false) {
	$count++;
}
$next = $count +1;


fwrite($fp, $next."<>".$user."<>".$message."<>".$postedAt."\n");

fclose($fp);


/*<?php

$data=file_get_contents('mission_2-2.txt');
$data_array = explode( "<>", $data );
$cnt = count($data_array);
for( $i=0;$i<$cnt;$i++ )
{
echo"\n";
echo($data_array[$i]);
}

?>*/
?>
</body>
</html>	

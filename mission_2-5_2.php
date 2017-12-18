<?php//2-2
//touch("mission_2-2.txt");
//$fp = fopen("mission_2-2.txt", "r+");

$comment =($_POST['comment']);

$user =($_POST['user']);

$postedAt =date('Y-m-d H:i:s');

$count = 0;
while(fgets($fp) !== false) {
	$count++;
}
$next = $count +1;

fwrite($fp, $next."<>".$user."<>".$comment."<>".$postedAt."\n");
fclose($fp);


if($_SERVER['REQUEST_METHOD']=='POST')
{

   $comment =($_POST['comment']);

   $user =($_POST['user']);

   $postedAt =date('Y-m-d H:i:s');

   $newData =(sizeof(file($dataFile))+1)."<>".$comment."<>".$user."<>".$postedAt."\n";

   print_r($_POST);
   print("$comment");

   $fp =fopen($dataFile,'a');
   fwrite($fp, $newData);
   fclose($fp);
}



     $file=file($dataFile); // ファイルの内容を配列に格納 

     foreach( $file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // 改行しながら値を表示 

}
?>
<html>//2-1
<head>
</head>
<body>
<form method="post" action="mission_2-5_2.php">
    <div>
	<label for="name">名前:</label>
	<input type="text" id="name" />
    </div>
    <div>
	<label for="comment">コメント:</label>
	<textarea id="comment"></textarea>
    </div>
    <div>
	<input type="submit"value="送信">
    </div>
</form>

<form method="POST">
    <div>
	<label for="user">名前:</label>
	<input type="text" name="user" />
    </div>
    <div>
	コメント <input type = "text" name="comment" >
    </div>
    <div>
	<input type="submit"value="送信">
    </div>
</form>

<form method = "post">
  <p>削除対象番号 :<input type = "text" name="delete"></p>
  <input type = "submit" value= "削除">
</form>

<?php
$delete=$_POST["delete"];
$A= file("mission_2-2.txt");

if(empty($delete)){}
else{
  $fp=fopen("mission_2-2.txt","w+");
  for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
   if("$num"!="$delete"){
		fwrite($fp,"$A[$i]");
	}
   else{
		fwrite($fp,"削除されました"."\n");
	}
  }
}
$A= file("mission_2-2.txt");
for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
    echo $num."  ".$name."  ".$comment."  ".$time."  <br />\n";
}
?>


<form method = "post">
	<p>編集対象番号 :<input type = "text" name = "edit"></p>
	<input type = "submit" value = "編集">
</form>

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
</body>
</html>

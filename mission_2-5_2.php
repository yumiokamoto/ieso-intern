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



     $file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 

     foreach( $file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // ���s���Ȃ���l��\�� 

}
?>
<html>//2-1
<head>
</head>
<body>
<form method="post" action="mission_2-5_2.php">
    <div>
	<label for="name">���O:</label>
	<input type="text" id="name" />
    </div>
    <div>
	<label for="comment">�R�����g:</label>
	<textarea id="comment"></textarea>
    </div>
    <div>
	<input type="submit"value="���M">
    </div>
</form>

<form method="POST">
    <div>
	<label for="user">���O:</label>
	<input type="text" name="user" />
    </div>
    <div>
	�R�����g <input type = "text" name="comment" >
    </div>
    <div>
	<input type="submit"value="���M">
    </div>
</form>

<form method = "post">
  <p>�폜�Ώ۔ԍ� :<input type = "text" name="delete"></p>
  <input type = "submit" value= "�폜">
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
		fwrite($fp,"�폜����܂���"."\n");
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
	<p>�ҏW�Ώ۔ԍ� :<input type = "text" name = "edit"></p>
	<input type = "submit" value = "�ҏW">
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

	echo ($_POST['text']. "�͕ҏW����܂����B");
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

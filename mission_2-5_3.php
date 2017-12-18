<html>
<body>
<form method = "POST" action = "mission_2-5_3.php">
	<div>
		<label for = "name">名前</label>
		<input type = "text" name = "name"/>
	</div>
	<div>
		<label for = "comment">コメント</label>
		<textarea id = "text" name = "comment"></textarea>
	</div>
	<div>
		<input type = "submit" value= "送信">
	</div>
</form>

<form method = "POST">
	<p>削除対象番号<input type = "text" name = "delete"></p>
	<input type = "submit" value = "削除">
</form>

<form method = "POST">
	<p>編集対象番号<input type = "text" name = "edit"></p>
	<input type = "submit" value = "編集">
	<input type="hidden" name="edit" value="edit">
</form>
</body>
</html>

<?php
$dataFile =("mission_2-5.txt");
touch($dataFile);

/*
$comment =($_POST["comment"]);
$name =($_POST["name"]);
$postedAt =($_POST['Y-m-d H:i:s']);
$count = 0;
while(fgets($fp) !== false) {
	$count++;
}
$next = $count +1;

fwrite($fp, $next."<>".$name."<>".$comment."<>".$postedAt."\n");
fclose($fp);
*/
if($_SERVER['REQUEST_METHOD']=='POST')
{

   $comment =($_POST['comment']);

   $name =($_POST['name']);

   $postedAt =date('Y-m-d H:i:s');

   $newData =(sizeof(file($dataFile))+1)."<>".$comment."<>".$name."<>".$postedAt."\n";

   print_r($_POST);
   print("$comment");


   $fp =fopen($dataFile,'a');
   fwrite($fp, $newData);
   fputs ($fp, $newData."\n");
   fclose($fp);
}

$file=file($dataFile); // ファイルの内容を配列に格納 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $value."<br />\n"; // 改行しながら値を表示 
}

//<?php
$delete=$_POST["delete"];

if(empty($delete)){}
else{
  $fp=fopen("mission_2-5.txt","w+");
  for($i = 0; $i < count($dataFile); ++$i ){
    list($num,$name,$comment,$postedAt)=explode("<>",$dataFile[$i]);
   if("$num"!="$delete"){
		fwrite($fp,"$dataFile[$i]");
	}
   else{

		fwrite($fp,"削除されました"."\n");
	}
  }
}

$dataFile = file("mission_2-5.txt");
for($i = 0; $i < count($dataile); ++$i ){
    list($num,$name,$comment,$postedAt)=explode("<>",$dataFile[$i]);
    echo $num."  ".$name."  ".$comment."  ".$postedAt."  <br />\n";

fclose($fp);

}
?>
<?php
$edit = $_POST['edit'];
$file_edit = file("mission_2-5.txt");

if(empty($edit)){}
else{
	$fp3 = fopen("mission_2-5.txt","r+");
	$file_edit = file("mission_2-5.txt");
	for($l = 0;$l <count($file_edit); ++$l){
		list($num,$name,$comment,$time,$password) = explode("<>",$file_edit[$l]);
	/*if($dataFile[0] != ($_POST['text']))
	{
	$dataFile = $file_edit[$l];
	*/
	if("$num" == "$edit");{//データの番号を表す$numと$editが同じになれば、その行のデーtが編集したいデータである
		$line = $l; //編集したい配列番号$lを新しい変数$lineに入れておく
		$nam = $name;//編集したい行の名前を表す$nameをたらしい変数$namに入れておく
		$commen = $comment;//編集したい行のコメントを表す$commentを新しい変数$commenに入れておく
		
		//fwrite($fp,"$file_edit[$l]");
		//fwrite($fp,"は編集されました。"."\n");
	}
	}
	}


$dataFile = file("mission_2-5.txt");
for($l = 0; $l < count($dataile); ++$l ){
    list($num)=explode("<>",$dataFile[$l]);
    echo $num."  "."<br />\n";

 fclose($fp);

}
?>
<?php
$line = $_POST["lin"];//編集したい配列番号
$edit = $_POST["edi"];//入力フォームで入力した編集番号
$nam = $_POST["name"];//編集したい行の名前
$commen =$_POST["comment"];//編集したい行の番号
$date = new DateTime();
touch("mission_2-5.txt");
$pas = $_POST["pas"];//編集時に新たに入力したパスワードをmission_2-5_3.txtに書き込んでおく

touch("mission_2-5_3.txt");
$fp4 = fopen("mission_2-5_3.txt","r+");
//fwrite ($fp4,$pas.PHP EOL);
$pas_array = file("mission_2-5_3.txt");
$file_edit = file("mission_2-5.txt");

if(empty($edit)){}
else{
$fp3 = fopen("mission_2-5.txt","w+");
//読み込むファイル名の指定
//ファイルを全て配列に入れる

for($l = 0; $l<count($ret_array); $l++){
	list($p) = $pas_array;
	list($num,$name,$comment,$time,$password) = explode("<>",$file_edit[$l]);
	if("$l" == "$line"){
		if($p == $password){
			echo"投稿番号[".$edit."]を再編集しました。"."<br/>";
			fwrite($fp3,$edit.'<>'.$nam.'<>'.$commen.'<>'.$date->format("y-m-d_H:i:s").'<>'.$password);
	}
		else{
			echo'<font color = "red">パスワードが間違っています<br/></font>';
			fwrite($fp3,"$file_edit[$l]");
		}
	}
	else{
			fwrite($fp,"$file_edit[$l]");
	}
	}

 fclose($fp);
}
?>


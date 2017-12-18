<html>
<body>
<form method = "POST">
	<div>
		<label for = "name">名前</label>
		<input type = "text" name = "name"/>
	</div>
	<div>
		<label for = "comment">コメント</label>
		<textarea id = "text" name = "comment"></textarea>
	</div>
	<div>
                 <label for = "pass1">パスワード</label>
		 <input type='text' name='pass1'>
	</div>
	<div>
		<input type = "submit" value= "送信">
	</div>


</form>

<form method = "POST">
	<p>削除対象番号<input type = "text" name = "delete"></p>
	<div>
                 <label for = "pass2">パスワード</label>
		 <input type='text' name='pass2'>
	</div>
	<div>
		<input type = "submit" value= "削除">
	</div>
</form>

<form method = "POST">
	<p>編集対象番号<input type = "text" name = "edit"></p>
	<div>
                 <label for = "pass3">パスワード</label>
		 <input type='text' name='pass3'>
	</div>
	<div>
		<input type = "submit" value= "編集">
	</div>
	<p><input type="hidden" name="number" value= "$next"></p>

</form>

</body>
</html>

<?php
//touch("mission_2-5.txt");
$fp =fopen("mission_2-5.txt",'r+');

$comment =($_POST["comment"]);
$name =($_POST["name"]);
$postedAt = date('Y')."年".date("m月d日 H:i:s");
$pass1 =($_POST["pass1"]);
$count = 0;

if(empty($pass1)){}
else{


while(fgets($fp) !== false) {
	$count++;
}
$next = $count +1;

fwrite($fp, $next."<>".$name."<>".$comment."<>".$postedAt."<>".$pass1."<>"."\n");


}
fclose($fp);


//file読み込み
$dataFile = ("mission_2-5.txt");
$file=file($dataFile); // ファイルの内容を配列に格納 


//<?php
$delete=$_POST["delete"];
$pass2=$_POST["pass2"];

echo $pass2;

if(empty($delete)){}
else{
      $fp=fopen("mission_2-5.txt","w+");
  foreach( $file as $value){
    //list($num,$name,$comment,$postedAt,$pass)=explode("<>",$dataFile[$i]);
    $line = explode("<>",$value);  
   if($line[0] != $delete){
		fwrite($fp,"$value");
	}
   else if($pass2 == $line[4]){
		fwrite($fp,"削除されました"."\n");
	}
   else if($pass2 != $line[4]){
                echo "パスワードが違います";
		fwrite($fp,"$value");
       }
  }
  fclose($fp);
}

//$dataFile = file("mission_2-5.txt");
//for($i = 0; $i < count($dataFile); ++$i ){
    //list($num,$name,$comment,$postedAt)=explode("<>",$dataFile[$i]);
    //echo $num."  ".$name."  ".$comment."  ".$postedAt."  <br />\n";

//fclose($fp);

//}



//エコー部分
//file読み込み
$dataFile = ("mission_2-5.txt");
$file=file($dataFile); // ファイルの内容を配列に格納 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $line[0].$line[4]."<br>"; // 改行しながら値を表示 
}
////////////////////////////////////////////




?>
<?php
$edit = $_POST['edit'];
$file_edit = file("mission_2-5.txt");

$delete=$_POST["edit"];
$pass3=$_POST["pass3"];

echo $pass3;

if(empty($edit)){}
else{
      $fp=fopen("mission_2-5.txt","w+");
  foreach( $file as $value){
    //list($num,$name,$comment,$postedAt,$pass)=explode("<>",$dataFile[$i]);
    $line = explode("<>",$value);  
   if($line[0] != $edit){
		fwrite($fp,"$value");
	}
   else if($pass3 == $line[4]){
		fwrite($fp,"編集されました"."\n");
	}
   else if($pass3 != $line[4]){
                echo "パスワードが違います";
		fwrite($fp,"$value");
       }
  }

if(isset($_POST['next'])){
	//隠しフィールドの value を表示する。
	print "送信された内容は{$_POST['next']}です。<br/>";
}

  fclose($fp);
}

/*if(empty($edit)){}
else{
	$fp3 = fopen("mission_2-5.txt","r+");
	$file_edit = file("mission_2-5.txt");
	for($l = 0;$l <count($file_edit); ++$l){
		list($num,$name,$comment,$time,$password) = explode("<>",$file_edit[$l]);
	/*if($dataFile[0] != ($_POST['text']))
	{
	$dataFile = $file_edit[$l];
	/
	if("$num" == "$edit");{//データの番号を表す$numと$editが同じになれば、その行のデーtが編集したいデータである
		$line = $l; //編集したい配列番号$lを新しい変数$lineに入れておく
		$nam = $name;//編集したい行の名前を表す$nameをたらしい変数$namに入れておく
		$commen = $comment;//編集したい行のコメントを表す$commentを新しい変数$commenに入れておく
		
		//fwrite($fp,"$file_edit[$l]");
		//fwrite($fp,"は編集されました。"."\n");
	}
	}
	}
*/

/*$dataFile = file("mission_2-5.txt");
for($l = 0; $l < count($dataile); ++$l ){
    list($num)=explode("<>",$dataFile[$l]);
    echo $num."  "."<br />\n";

 fclose($fp);

}*/
$dataFile = ("mission_2-5.txt");
$file=file($dataFile); // ファイルの内容を配列に格納 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $line[0].$line[1].$line[2].$line[4]."<br>"; // 改行しながら値を表示 
}
?>

/*<?php
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
?>*/
<?php

$edi = $_POST["edit"];
$edibun = file("mission_2-5.txt");
if(empty($edi)){}
else{
for ($km = 0; $m < count($edibun); $m++) {
$edibunDate = explode("<>", $edibun[$m]);

if($edi == $edibunDate[0]){
$datafile ='mission_2-5.txt';
if (isset($_POST["name"],$_POST["comment"])) {
$name = ($_POST["name"]);
$comment = ($_POST["comment"]);
$postedAt = date('Y')."年".date("m月d日 H:i:s");
$newdata = ($edi."<>".$name."<>".$comment."<>".$postedAt. "\n");
$fp = fopen($datafile,'a+'); 
fwrite($fp, $newdata);
fclose($fp); 
} 
}
}
}

//配列をarray.dbに文字列で保存する
//file_put_contents("./array.db", serialize($array));

//array.dbにある文字列を配列に復元する
//$array = unserialize(file_get_contents("./array.db"));

?>


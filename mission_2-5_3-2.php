<html>
<body>
<form method = "POST">
	<div>
		<label for = "name">���O</label>
		<input type = "text" name = "name"/>
	</div>
	<div>
		<label for = "comment">�R�����g</label>
		<textarea id = "text" name = "comment"></textarea>
	</div>
	<div>
                 <label for = "pass1">�p�X���[�h</label>
		 <input type='text' name='pass1'>
	</div>
	<div>
		<input type = "submit" value= "���M">
	</div>


</form>

<form method = "POST">
	<p>�폜�Ώ۔ԍ�<input type = "text" name = "delete"></p>
	<div>
                 <label for = "pass2">�p�X���[�h</label>
		 <input type='text' name='pass2'>
	</div>
	<div>
		<input type = "submit" value= "�폜">
	</div>
</form>

<form method = "POST">
	<p>�ҏW�Ώ۔ԍ�<input type = "text" name = "edit"></p>
	<div>
                 <label for = "pass3">�p�X���[�h</label>
		 <input type='text' name='pass3'>
	</div>
	<div>
		<input type = "submit" value= "�ҏW">
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
$postedAt = date('Y')."�N".date("m��d�� H:i:s");
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


//file�ǂݍ���
$dataFile = ("mission_2-5.txt");
$file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 


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
		fwrite($fp,"�폜����܂���"."\n");
	}
   else if($pass2 != $line[4]){
                echo "�p�X���[�h���Ⴂ�܂�";
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



//�G�R�[����
//file�ǂݍ���
$dataFile = ("mission_2-5.txt");
$file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $line[0].$line[4]."<br>"; // ���s���Ȃ���l��\�� 
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
		fwrite($fp,"�ҏW����܂���"."\n");
	}
   else if($pass3 != $line[4]){
                echo "�p�X���[�h���Ⴂ�܂�";
		fwrite($fp,"$value");
       }
  }

if(isset($_POST['next'])){
	//�B���t�B�[���h�� value ��\������B
	print "���M���ꂽ���e��{$_POST['next']}�ł��B<br/>";
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
	if("$num" == "$edit");{//�f�[�^�̔ԍ���\��$num��$edit�������ɂȂ�΁A���̍s�̃f�[t���ҏW�������f�[�^�ł���
		$line = $l; //�ҏW�������z��ԍ�$l��V�����ϐ�$line�ɓ���Ă���
		$nam = $name;//�ҏW�������s�̖��O��\��$name�����炵���ϐ�$nam�ɓ���Ă���
		$commen = $comment;//�ҏW�������s�̃R�����g��\��$comment��V�����ϐ�$commen�ɓ���Ă���
		
		//fwrite($fp,"$file_edit[$l]");
		//fwrite($fp,"�͕ҏW����܂����B"."\n");
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
$file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $line[0].$line[1].$line[2].$line[4]."<br>"; // ���s���Ȃ���l��\�� 
}
?>

/*<?php
$line = $_POST["lin"];//�ҏW�������z��ԍ�
$edit = $_POST["edi"];//���̓t�H�[���œ��͂����ҏW�ԍ�
$nam = $_POST["name"];//�ҏW�������s�̖��O
$commen =$_POST["comment"];//�ҏW�������s�̔ԍ�
$date = new DateTime();
touch("mission_2-5.txt");
$pas = $_POST["pas"];//�ҏW���ɐV���ɓ��͂����p�X���[�h��mission_2-5_3.txt�ɏ�������ł���

touch("mission_2-5_3.txt");
$fp4 = fopen("mission_2-5_3.txt","r+");
//fwrite ($fp4,$pas.PHP EOL);
$pas_array = file("mission_2-5_3.txt");
$file_edit = file("mission_2-5.txt");

if(empty($edit)){}
else{
$fp3 = fopen("mission_2-5.txt","w+");
//�ǂݍ��ރt�@�C�����̎w��
//�t�@�C����S�Ĕz��ɓ����

for($l = 0; $l<count($ret_array); $l++){
	list($p) = $pas_array;
	list($num,$name,$comment,$time,$password) = explode("<>",$file_edit[$l]);
	if("$l" == "$line"){
		if($p == $password){
			echo"���e�ԍ�[".$edit."]���ĕҏW���܂����B"."<br/>";
			fwrite($fp3,$edit.'<>'.$nam.'<>'.$commen.'<>'.$date->format("y-m-d_H:i:s").'<>'.$password);
	}
		else{
			echo'<font color = "red">�p�X���[�h���Ԉ���Ă��܂�<br/></font>';
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
$postedAt = date('Y')."�N".date("m��d�� H:i:s");
$newdata = ($edi."<>".$name."<>".$comment."<>".$postedAt. "\n");
$fp = fopen($datafile,'a+'); 
fwrite($fp, $newdata);
fclose($fp); 
} 
}
}
}

//�z���array.db�ɕ�����ŕۑ�����
//file_put_contents("./array.db", serialize($array));

//array.db�ɂ��镶�����z��ɕ�������
//$array = unserialize(file_get_contents("./array.db"));

?>


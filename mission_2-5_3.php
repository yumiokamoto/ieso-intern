<html>
<body>
<form method = "POST" action = "mission_2-5_3.php">
	<div>
		<label for = "name">���O</label>
		<input type = "text" name = "name"/>
	</div>
	<div>
		<label for = "comment">�R�����g</label>
		<textarea id = "text" name = "comment"></textarea>
	</div>
	<div>
		<input type = "submit" value= "���M">
	</div>
</form>

<form method = "POST">
	<p>�폜�Ώ۔ԍ�<input type = "text" name = "delete"></p>
	<input type = "submit" value = "�폜">
</form>

<form method = "POST">
	<p>�ҏW�Ώ۔ԍ�<input type = "text" name = "edit"></p>
	<input type = "submit" value = "�ҏW">
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

$file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 

foreach( $file as $value ){  
$line = explode("<>",$value);  
echo $value."<br />\n"; // ���s���Ȃ���l��\�� 
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

		fwrite($fp,"�폜����܂���"."\n");
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
	if("$num" == "$edit");{//�f�[�^�̔ԍ���\��$num��$edit�������ɂȂ�΁A���̍s�̃f�[t���ҏW�������f�[�^�ł���
		$line = $l; //�ҏW�������z��ԍ�$l��V�����ϐ�$line�ɓ���Ă���
		$nam = $name;//�ҏW�������s�̖��O��\��$name�����炵���ϐ�$nam�ɓ���Ă���
		$commen = $comment;//�ҏW�������s�̃R�����g��\��$comment��V�����ϐ�$commen�ɓ���Ă���
		
		//fwrite($fp,"$file_edit[$l]");
		//fwrite($fp,"�͕ҏW����܂����B"."\n");
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
?>


<?php
/*<form method="post">
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
</form>*/


include("mission_2-2.php");
$filename = 'mission_2-2.txt'; //file��ϐ��Ɋi�[
$A=file("$filename");
  for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
    echo $num."  ".$name."  ".$comment."  ".$time."  <br />\n";
}

//$content = file_get_contents($filename); //�t�@�C����ǂݍ��ݕϐ��Ɋi�[


/*echo $content; //�t�@�C���̒��g���o��

$animals = ['dog', 'cat', 'caw'];

foreach ($animals as $animal) {
    echo $animal . '<br>';
}*/

?>


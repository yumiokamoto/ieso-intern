<?php
$user="ユーザー名";
$pass="パスワード";

try {
$pdo = new PDO('mysql:host=localhost;dbname=データベース名',$user,$pass,
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('�f�[�^�x�[�X�ڑ����s�B'.$e->getMessage());
}

$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);
foreach($stmt as $row){
	echo $row['ID'].'', $row['TITLE'].'', $row['CONTENT'].'<br>';
}


$sql = 'DELETE FROM CD where ID = 1';
$stmt = $pdo -> prepare($sql_s);
$stmt->execute();

$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);


foreach($stmt as $row){
	echo $row['ID'].'', $row['TITLE'].'', $row['CONTENT'].'<br>';
}

//}
?>

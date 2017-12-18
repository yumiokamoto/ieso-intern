<?php
$user="ユーザー名";
$pass="パスワード";
/*
$pdo = new PDO('mysql:host=localhost;dbname=co_413_it_3919_com',$user,$pass);

if( $pdo ) {

if($pdo == null){
	echo('�ڑ����s').PHP_EOL;
}
*/

try {
$pdo = new PDO('mysql:host=localhost;dbname=データベース名',$user,$pass,
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('�f�[�^�x�[�X�ڑ����s�B'.$e->getMessage());
}


$stmt = $pdo -> prepare("INSERT INTO CD (ID, TITLE, CONTENT) VALUES (1, 'test', 'test_content' )");
$stmt->execute();

$stmt = $pdo -> prepare("INSERT INTO CD (ID, TITLE, CONTENT) VALUES (2, 'test_2', 'test_content_2' )");
$stmt->execute();
$stmt = $pdo -> prepare("INSERT INTO CD (ID, TITLE, CONTENT) VALUES (3, 'test_3', 'test_content_3' )");
$stmt->execute();
$stmt = $pdo -> query("SELECT * FROM CD");
$count = $stmt -> rowCount();
echo($count);


$sql_s = 'SHOW tables';
$result =  $pdo -> query($sql_s);

foreach($result as $row){
echo $row[0];
echo '<br>';
}

$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);
$result = $stmt->fetchAll();
//print_r($result);
foreach($result as $row){
//	echo $row['id'].'',$row['firstname'].''.$row['lastname'].''.$row['comment'].''.$row['reg_date'].'<br>';
	echo $row['ID'].' ', $row['TITLE'].' ', $row['CONTENT'].'<br>';
}



$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);

//	echo('20170918');


foreach($stmt as $row){
	echo $row['ID'].'', $row['TITLE'].'', $row['CONTENT'].'<br>';
}

//}
?>

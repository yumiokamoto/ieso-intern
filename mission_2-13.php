<?php
$user="co-413.it.3919.c";
$pass="Yvuk4n2A";

try {
$pdo = new PDO('mysql:host=localhost;dbname=co_413_it_3919_com',$user,$pass,
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);
foreach($stmt as $row){
	echo $row['ID'].'', $row['TITLE'].'', $row['CONTENT'].'<br>';
}



$sql = "update CD set TITLE = 'testupdate' where ID = 1";
$stmt = $pdo -> prepare($sql);
$stmt->execute();

$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);


foreach($stmt as $row){
	echo $row['ID'].'', $row['TITLE'].'', $row['CONTENT'].'<br>';
}

//}
?>

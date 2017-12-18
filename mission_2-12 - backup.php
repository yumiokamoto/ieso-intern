<?php

print($_SERVER['HOME']);
$user = posix_getpwuid(posix_getuid());
print_r(array_values($user));



$user="ユーザー名";
$pass="パスワード";
$pdo = new PDO('mysql:host=localhost;dbname=データベース名',$user,$pass);

if( $pdo ) {

if($pdo == null){
	echo('�ڑ����s').PHP_EOL;
}




/*20170918*/



$sql_s = 'SHOW database';
$result = $pdo -> query($sql_s);

foreach($result as $row){
echo $row[0];
echo '<br>';
echo $row[1];
echo '<br>';
echo $row[2];
echo '<br>';
}


$sql_s = 'select * from CD';
$stmt = $pdo -> query($sql_s);

if (!$stmt) {
    die('�N�G���[�����s���܂����B'.mysql_error());
}




foreach($stmt as $row){
	echo $row['ID'].'',$row['TITLE'].'',$row['CONTENT'].'<br>';

}
}
//}
?>

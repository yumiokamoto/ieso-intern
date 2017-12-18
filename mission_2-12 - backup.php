<?php

print($_SERVER['HOME']);
$user = posix_getpwuid(posix_getuid());
print_r(array_values($user));



$user="co-413.it.3919.c";
$pass="Yvuk4n2A";
$pdo = new PDO('mysql:host=localhost;dbname=co_413_it_3919_com',$user,$pass);

if( $pdo ) {

if($pdo == null){
	echo('接続失敗').PHP_EOL;
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
    die('クエリーが失敗しました。'.mysql_error());
}




foreach($stmt as $row){
	echo $row['ID'].'',$row['TITLE'].'',$row['CONTENT'].'<br>';

}
}
//}
?>

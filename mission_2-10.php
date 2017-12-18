<?php
$user="co-413.it.3919.c";
$pass="Yvuk4n2A";
$pdo = new PDO('mysql:host=localhost;dbname=co_413_it_3919_com',$user,$pass);

/*
$res=null;
$sql=null;
*/

if( $pdo ) {

	// ƒe[ƒuƒ‹ì¬‚Ì‚½‚ß‚ÌSQL
$sql_c = 'create table if not exists test(
	user id int not null auto_increment,
	user_name varcher(255) not null,
	password char(32) not null,
	primary key(user_id),
	unique(user_name)
	)character set utf8;';

$sql_c = "CREATE TABLE CD(
    ID INTEGER NOT NULL,
    TITLE VARCHAR(100),
    CONTENT VARCHAR(200),
    PRIMARY KEY(ID)
) engine = innodb default charset = utf8";

/*$stmt = $pdo -> prepare($sql_c);
$stmt -> execute();
}

$sql_s = 'SHOW TABLES';
$result = $pdo -> query('$sql_s');

foreach($result as $row){
echo $row[0];
echo '<br>';
}
*/

$stmt = $pdo -> query('show create table CD');
foreach($stmt as $row){
	echo $row[0].'<br>';
	echo $row[1].'<br>';
}
}
?>

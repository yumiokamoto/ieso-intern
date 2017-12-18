<?php
$res=null;
$dbh=null;
$sql=null;

$user="co-413.it.3919.c";
$pass="Yvuk4n2A";
$dbh = new PDO('mysql:host=localhost;dbname=co_413_it_3919_com',$user,$pass);



if( $dbh ) {

	// ƒe[ƒuƒ‹ì¬‚Ì‚½‚ß‚ÌSQL
$sql = "CREATE TABLE CD(
    ID INTEGER NOT NULL,
    TITLE VARCHAR(100),
    CONTENT VARCHAR(200),
    PRIMARY KEY(ID)
) engine = innodb default charset = utf8";

$res = $dbh->query($sql);
$sql = 'SHOW TABLES FROM $dbh';
}
?>

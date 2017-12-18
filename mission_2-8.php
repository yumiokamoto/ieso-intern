<?php
$res=null;
$dbh=null;
$sql=null;

$user="ユーザー名";
$pass="パスワード";
$dbh = new PDO('mysql:host=localhost;dbname=データベース名',$user,$pass);



if( $dbh ) {

	// �e�[�u���쐬�̂��߂�SQL
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

<html>
<head>
</head>
<body>
<form method="POST" action="test12.php">
    <div>
	<label for="user">���O:</label>
	<input type="text" name="user" />
    </div>
    <div>
	<label for="message">�R�����g:</label>
	<textarea type="text"  name="message"></textarea>
    </div>
    <div>
	<input type="submit"value="���M">
    </div>
</form>

<?php
$dataFile ='mission_2-2.txt';
touch($dataFile);


if($_SERVER['REQUEST_METHOD']=='POST')
{

   $message =($_POST['message']);

   $user =($_POST['user']);

   $postedAt =date('Y-m-d H:i:s');

   $newData =(sizeof(file($dataFile))+1)."<>".$message."<>".$user."<>".$postedAt."\n";

   print_r($_POST);
   print("$message");

   $fp =fopen($dataFile,'a');
   fwrite($fp, $newData);
   fclose($fp);
}

?>

<?php

     $file=file($dataFile); // �t�@�C���̓��e��z��Ɋi�[ 

     foreach( $file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // ���s���Ȃ���l��\�� 

}

?>

</body>
</html>

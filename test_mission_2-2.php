
<?php 

$dataFile ='mission_2-2.tex.txt'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST')  
 { 

    $message = ($_POST['message']); 

    $user = ($_POST['user']); 

    $postedAt = date('Y-m-d H:i:s'); 

    $newData = (sizeof(file($dataFile)) + 1)."<>".$message."<>".$user."<>".$postedAt. "\n"; 

    $fp = fopen($dataFile,'a');  
     fwrite($fp, $newData);  
     fclose($fp);  
 }  
 ?> 

<!DOCTYPE html>  
 <html lang="ja">  
 <head>  
      <meta charset="utf-8">  
      <title>�ȈՌf����</title>  
 </head>  
 <body>  
 <h1>�ȈՌf����</h1>  
      <form action="" method="POST">  
       message:<input type="text" name="message">  
        user:<input type="text" name="user">  
          <input type="submit" value="���e"></br></br>  
      </form>  
 <?php 

     $file=file("mission_2-2.tex.txt"); // �t�@�C���̓��e��z��Ɋi�[ 

     foreach($file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // ���s���Ȃ���l��\�� 

} 

?> 

</body>  
 </html>
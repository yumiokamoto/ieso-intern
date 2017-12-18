
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
      <title>ŠÈˆÕŒfŽ¦”Â</title>  
 </head>  
 <body>  
 <h1>ŠÈˆÕŒfŽ¦”Â</h1>  
      <form action="" method="POST">  
       message:<input type="text" name="message">  
        user:<input type="text" name="user">  
          <input type="submit" value="“Še"></br></br>  
      </form>  
 <?php 

     $file=file("mission_2-2.tex.txt"); // ƒtƒ@ƒCƒ‹‚Ì“à—e‚ð”z—ñ‚ÉŠi”[ 

     foreach($file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // ‰üs‚µ‚È‚ª‚ç’l‚ð•\Ž¦ 

} 

?> 

</body>  
 </html>
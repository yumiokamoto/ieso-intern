
   $fp = fopen("mission_2-2.tex.txt","r+");
   fwrite($fp, $newData);
   fclose($fp);


     $file=file("mission_2-2.tex.txt"); // ファイルの内容を配列に格納 

     foreach( $file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // 改行しながら値を表示 
}



   $fp = fopen("mission_2-2.tex.txt","r+");
   fwrite($fp, $newData);
   fclose($fp);


     $file=file("mission_2-2.tex.txt"); // �t�@�C���̓��e��z��Ɋi�[ 

     foreach( $file as $value ){  
      $line = explode("<>",$value);  
      echo $value."<br />\n"; // ���s���Ȃ���l��\�� 
}


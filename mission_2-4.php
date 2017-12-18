<form method = "post">
  <p>íœ‘ÎÛ”Ô† :<input type = "text" name="delete"></p>
  <input type = "submit" value= "íœ">
</form>

<?php
$delete=$_POST["delete"];
$A= file("mission_2-2.txt");

if(empty($delete)){}
else{
  $fp=fopen("mission_2-2.txt","w+");
  for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
   if("$num"!="$delete"){
		fwrite($fp,"$A[$i]");
	}
   else{
		fwrite($fp,"íœ‚³‚ê‚Ü‚µ‚½"."\n");
	}
  }
}
$A= file("mission_2-2.txt");
for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
    echo $num."  ".$name."  ".$comment."  ".$time."  <br />\n";
}

?>

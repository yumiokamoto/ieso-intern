<?php
/*<form method="post">
    <div>
	<label for="name">名前:</label>
	<input type="text" id="name" />
    </div>
    <div>
	<label for="comment">コメント:</label>
	<textarea id="comment"></textarea>
    </div>
    <div>
	<input type="submit"value="送信">
    </div>
</form>*/


include("mission_2-2.php");
$filename = 'mission_2-2.txt'; //fileを変数に格納
$A=file("$filename");
  for($i = 0; $i < count($A); ++$i ){
    list($num,$name,$comment,$time)=explode("<>",$A[$i]);
    echo $num."  ".$name."  ".$comment."  ".$time."  <br />\n";
}

//$content = file_get_contents($filename); //ファイルを読み込み変数に格納


/*echo $content; //ファイルの中身を出力

$animals = ['dog', 'cat', 'caw'];

foreach ($animals as $animal) {
    echo $animal . '<br>';
}*/

?>


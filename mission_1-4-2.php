<?php
$comment=$_GET['comment'];
echo $comment;
?>
<html>
<head>
<title>誕生月の送信結果</title>
</head>
<body>
<h1>フォームからデータの送信</h1>
<form method="post" action="mission_1-4-1">
<input type="text name="comment/"><br/>
<input type="submit"value="送信/">
</form>
</body>
</html>

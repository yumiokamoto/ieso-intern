<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>�T���v���A�v���P�[�V����</title>
  </head>
  <body>
  <h1>���O�C���@�\ </h1>
  <div><?php echo $errorMessage; ?></div>
  <ul>
  <li><a href="login.php">���O�C����ʂɖ߂�</a></li>
  </ul>
  </body>
</html>


<?php
session_start();

if (isset($_SESSION["USERID"])) {
  $errorMessage = "���O�A�E�g���܂����B";
}
else {
  $errorMessage = "�Z�b�V�������^�C���A�E�g���܂����B";
}
// �Z�b�V�����ϐ��̃N���A
$_SESSION = array();
// �N�b�L�[�̔j���͕s�v
//if (ini_get("session.use_cookies")) {
//    $params = session_get_cookie_params();
//    setcookie(session_name(), '', time() - 42000,
//        $params["path"], $params["domain"],
//        $params["secure"], $params["httponly"]
//    );
//}
// �Z�b�V�����N���A
@session_destroy();
?>


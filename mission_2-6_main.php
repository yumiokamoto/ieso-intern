<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>�T���v���A�v���P�[�V����</title>
  </head>
  <body>
  <h1>���O�C���@�\�@�T���v���A�v���P�[�V����</h1>
  <!-- ���[�UID��HTML�^�O���܂܂�Ă��ǂ��悤�ɃG�X�P�[�v���� -->
  <p>�悤����<?=htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>����</p>
  <ul>
  <li><a href="logout.php">���O�A�E�g</a></li>
  </ul>
  </body>
</html>
<?php
session_start();

// ���O�C����Ԃ̃`�F�b�N
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}

?>


<?php
  include_once('../shared/class_conn.php');
  include_once('../shared/class_mem.php');
  $mem = new Mem;

  //如果有來自註冊表單送來的資料
  //將資料存入資料庫mem資料表後 發信通知
$mem_mail = $_POST['mem_mail'];
$mem_pwd = md5($_POST['mem_pwd']);
$mem_name = $_POST['mem_name'];

$dataArray = [$mem_mail,$mem_pwd, $mem_name];

$mem->insertRow($dataArray);

header('Location:./register_ok.php?msg=1');
?>
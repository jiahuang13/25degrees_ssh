<?php
 include_once('../shared/class_conn.php'); 
 include_once('../shared/class_mem.php');
 $mem = new Mem;
 
 $mem_mail = $_POST['mem_mail'];
 $mem_pwd = $_POST['mem_pwd'];

 $row = $mem->loginChk($mem_mail, $mem_pwd);

 //檢查登入的帳號密碼 成功則將資訊記錄到session變數
 if($mem->total_rows == 1){
  $_SESSION['mem_id'] = $row['mem_id'];
  $_SESSION['mem_name'] = $row['mem_name'];
  $_SESSION['mem_level'] = $row['mem_level'];
  
  $url = '../';
 } else {
  $url = './login.php?msg=1';
 }

 header('Location:'.$url);
?>
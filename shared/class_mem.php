<?php
if (!isset($_SESSION)) {
  session_start();
}
date_default_timezone_set('Asia/Taipei');

class Mem extends Conn
{
  //屬性
  public $total_rows;
  //function
  function loginChk($mem_mail, $mem_pwd)
  {
    try {
      $sql_str = "SELECT * FROM mem WHERE mem_mail = ? AND mem_pwd = ? AND mem_level > 1";
      $stmt = $this->connect()->prepare($sql_str);
      $stmt->execute(array($mem_mail, $mem_pwd));
      $row = $stmt->fetch();
      $this->total_rows = $stmt->rowCount();
      return $row;
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }

  //檢查會員帳號mem_mail是否存在
  function chkMemMail($mem_mail)
  {
    try {
      $sql_str = "SELECT * FROM mem WHERE mem_mail = ?";
      $stmt = $this->connect()->prepare($sql_str);
      $stmt->execute(array($mem_mail));
      $this->total_rows = $stmt->rowCount();
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }


  //註冊會員>新增帳密
  function insertRow($dataArray)
  {
    try {
      $sql_str = "INSERT INTO mem (mem_mail, mem_pwd, mem_name) VALUES (?, ?, ?)";
      $stmt = $this->connect()->prepare($sql_str);
      $stmt->execute($dataArray);
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }
}

<?php
if (!isset($_SESSION)) {
  session_start();
}
date_default_timezone_set('Asia/Taipei');

class Mb extends Conn
{
  //設定屬性 
  public $total_rows;

  //設計功能
  //負責查詢顯示全部的留言
  function showAll()
  {
    try {
      //(1)準備好sql語法
      $sql_str = "SELECT *
                  FROM mb
                  ORDER BY mb_time_m DESC, mb_id DESC";
      //(2)建立預處理器物件
      $stmt = $this->connect()->prepare($sql_str);

      //(4)執行並帶入資料
      $stmt->execute();
      $rows = $stmt->fetchAll(); //將資料逐筆取出放在rows
      $this->total_rows = $stmt->rowCount(); //計算出總筆數放在total中
      return $rows; //回傳rows

      //(5)
      header('Location:./mb_index.php');
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }

  //負責查詢顯示一筆指定的留言
  function showOne($data)
  {
    try {
      //(1)準備好sql語法
      $sql_str = "SELECT *
                  FROM mb
                  WHERE mb_id = ?";
      //(2)建立預處理器物件
      $stmt = $this->connect()->prepare($sql_str);

      //(4)執行並帶入資料
      // $stmt->execute(array($data));
      $stmt->execute([$data]);
      $row = $stmt->fetch(); //將資料逐筆取出放在rows
      return $row; //回傳row

      //(5)
      header('Location:./mb_index.php');
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }

  //負責新增留言
  function insertRow($dataArray)
  {
    try {
      //(1)準備好sql語法
      $sql_str = "INSERT INTO mb (mb_name, mb_content, mb_time_c, mb_time_m)
                  VALUES (?, ?, ?, ?)";
      //(2)建立預處理器物件
      $stmt = $this->connect()->prepare($sql_str);

      //(4)執行並帶入資料
      $stmt->execute($dataArray);
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }

  //負責修改留言
  function updateRow($dataArray)
  {
    try {
      //(1)準備好sql語法
      $sql_str = "UPDATE mb  SET mb_name = ?, mb_content = ?, mb_time_m = ?
                  WHERE mb_id = ?";
      //(2)建立預處理器物件
      $stmt = $this->connect()->prepare($sql_str);

      //(4)執行並帶入資料
      $stmt->execute($dataArray);
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }


  //負責刪除一筆留言
  function deleteRow($data)
  {
    try {
      //(1)準備好sql語法
      $sql_str = "DELETE FROM mb WHERE mb_id = ?";
      //(2)建立預處理器物件
      $stmt = $this->connect()->prepare($sql_str);
      //(4)執行並帶入資料
      $stmt->execute([$data]);
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }
}

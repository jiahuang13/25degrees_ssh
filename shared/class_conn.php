<?php
//class沒有小括號，不接受資料
class Conn
{
  //設定屬性 
  //宣告變數為私域性
  private $db_hostname = 'localhost';    //資料庫主機名稱
  private $db_username = 'root';         //登入資料庫的管理者的帳號
  private $db_password = 'root';         //登入密碼
  private $db_name     = '25degrees';  //使用的資料庫
  private $db_charset  = 'utf8';             //設定字元編碼

  //設計功能 外面要用 宣告為public(可省略)
  //連線功能
  public function connect()
  {
    try {
    $dsn = "mysql:host={$this->db_hostname};dbname={$this->db_name};charset={$this->db_charset}";
    $conn = new PDO($dsn, $this->db_username, $this->db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
    } catch (PDOException $e) {
      die('ERROR!!!!') . $e->getMessage();
    }
  }
}

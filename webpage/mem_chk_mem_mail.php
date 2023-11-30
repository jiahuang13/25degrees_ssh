<?php
include_once('../shared/class_conn.php');
include_once('../shared/class_mem.php');
$mem = new Mem;

$mem_mail = $_POST['mem_mail'];

$mem->chkMemMail($mem_mail);
echo $mem->total_rows;

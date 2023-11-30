<?php
if (!isset($_SESSION)) {
  session_start();
}

unset($_SESSION['mem_id']);
unset($_SESSION['mem_name']);
unset($_SESSION['mem_level']);

header('Location:../');
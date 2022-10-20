<?php

//error_reporting (0);
//mysqli_report (MYSQLI_REPORT_OFF);// desabilita msgs de erros
$bd = new mysqli('localhost', 'root', '', 'Transation');

if ($bd -> connect_errno) {
    throw new RuntimeException("Failed to connect to MySQL: " . $bd -> connect_errno);
    exit();
}

$bd->set_charset('utf8mb4');
if ($bd->errno) {
throw new RuntimeException('mysqli error: ' . $bd->error);
}

<?php
include 'include/db_connect.php';

$test= new db_connect();
$test->select_rows();
$test->select_game();

?>


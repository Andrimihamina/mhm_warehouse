<?php
include('barCodeC128.class.php');

$code = new codeBarreC128('190.168.8.190:8080/warehouse/login');
$code->setTitle();
$code->setFramedTitle(true);
$code->setHeight(80);
$code->Output();
?>
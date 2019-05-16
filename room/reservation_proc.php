<?php
session_start();
$db = mysqli_connect("localhost","guest","gamesoft","hotel");

$roomnum=$_GET['R'];
$in_year = $_POST['in_year'];
$in_month = $_POST['in_month'];
$in_day = $_POST['in_day'];
$out_year = $_POST['out_year'];
$out_month = $_POST['out_month'];
$out_day = $_POST['out_day'];

$person = $_POST['person'];
?>


<b>============입력정보============</b><br>
<br>
<b>방 번호:</b> ROOM<?=$roomnum?><br>
<br>
<b>체크인:</b> <?=$in_year?>년 <?=$in_month?>월 <?=$in_day?>일<br>
<b>체크아웃:</b> <?=$out_year?>년 <?=$out_month?>월 <?=$out_day?>일<br>
<br>
<b>인원:</b> <?=$person?>인

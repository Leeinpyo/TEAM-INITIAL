<?php
session_start();
$db = mysqli_connect("localhost","guest","gamesoft","hotel");

$roomnum=$_GET['R']; //방번호
$in_year = $_POST['in_year']; //입실_년
$in_month = $_POST['in_month']; //입실_월
$in_day = $_POST['in_day']; //입실_일
$out_year = $_POST['out_year']; //퇴실_년
$out_month = $_POST['out_month']; //퇴실_월
$out_day = $_POST['out_day']; //퇴실_일

$person = $_POST['person']; //인원
?>


<b>============입력정보============</b><br>
<br>
<b>방 번호:</b> ROOM<?=$roomnum?><br>
<br>
<b>체크인:</b> <?=$in_year?>년 <?=$in_month?>월 <?=$in_day?>일<br>
<b>체크아웃:</b> <?=$out_year?>년 <?=$out_month?>월 <?=$out_day?>일<br>
<br>
<b>인원:</b> <?=$person?>인


<?php

if ($roomnum&&$in_year&&$in_month&&$in_day&&$out_year&&$out_month&&$out_day&&$person) {
  // 모든 값이 입력되어 넘어옴
  if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM `book_dates` WHERE book_date >='$in_year/$in_month/$in_day' AND book_date <='$out_year/$out_month/$out_day' AND book_room = '$roomnum';"))==0) {
    // 입력된 방 값 중에서 입력된 날짜 범위가 이미 사용중인지 확인

    $date1 = "$in_year-$in_month-$in_day";
    $date2 = "$out_year-$out_month-$out_day";

    $new_date = date("Y-m-d", strtotime("-1 day", strtotime($date1)));

    while(true) {
      $new_date = date("Y-m-d", strtotime("+1 day", strtotime($new_date)));
      $sql_save = mysqli_query($db,"INSERT INTO `book_dates` (`book_date`, `book_room`) VALUES ('$new_date','$roomnum');");
      if($new_date == $date2) break;
    }

    echo "<script>alert('예약 성공'); </script>"; // 날짜 등록
  }
  else
  {
    echo "<script>alert('이미 예약된 날짜입니다'); history.back(-1); </script>"; // 중복된 날짜 등록 차단

  }
}
else
{
  echo "<script>alert('잘못된 접근입니다. 관리자에게 문의해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>"; //기타 부정한 방법으로써의 접근 차단 및 쓸모없는 데이터가 저장되는 것을 방지함
}

?>

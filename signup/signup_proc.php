<?php
//db연결
$db = mysqli_connect("localhost","guest","gamesoft","hotel");
$id = $_POST['u_id'];
$pass = $_POST['u_pass'];
$name = $_POST['u_name'];
$age = $_POST['u_age'];
$mon = $_POST['u_mon'];
$day = $_POST['u_day'];
$gender = $_POST['gender'];
$tel = $_POST['tel1'];
$email = $_POST['email'];

echo "Send to database <br><b>ID :</b>: ".$id."<br><b>PASSWORD :</b>: ".$pass."<br><b>NAME :</b>: ".$name."<br><b>AGE :</b>: ".$age."<br><b>MON :</b>: ".$mon."<br><b>DAY :</b>: ".$day."<br><b>GENDER :</b>: ".$gender."<br><b>TEL :</b>: ".$tel."<br><b>EMAIL :</b>: ".$email."<br>";

if($id && $pass && $name && $age && $mon && $day && $tel && $email)
{
  if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';"))==0)
  {
    $sql = mysqli_query($db,"INSERT INTO `member` (`id`, `pass`, `name`, `age`, `mon`, `day`, `gender`, `tel`, `email`) VALUES ('$id',password('$pass'),'$name','$age','$mon','$day','$gender','$tel','$email');");
    echo "<script>alert('등록 되었습니다'); location.href='../signin/signin.php'; </script>"; //등록 통과
  }
  else
  {
    echo "<script>alert('이미 등록된 아이디 입니다'); history.back(-1); </script>"; // 중복된 아이디 등록 차단
  }
}
else
{
  echo "<script>alert('잘못된 접근입니다. 관리자에게 문의해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>"; //기타 부정한 방법으로써의 접근 차단 및 쓸모없는 데이터가 저장되는 것을 방지함
}


?>

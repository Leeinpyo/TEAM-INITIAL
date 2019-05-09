<?php
$db = mysqli_connect("localhost","guest","gamesoft","hotel");
$id = $_POST['u_id'];
$pass = $_POST['u_pass'];


if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';"))==0) //아이디를 찾을 수 없음
{
  echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br>";
  echo "<br><br>!ERROR: Could not found this <b>ID</b> in the database.";
  echo "<b><br><br>3초후 메인페이지로 이동합니다</b><meta http-equiv='refresh' content='3;url=../index.php'>";
}


if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';"))!=0) //있는 아이디
{
  if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE pass=password('$pass');"))==0) // 올바르지 않은 비밀번호일 경우
  {
    echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br>";
    echo "<br><br>!ERROR: Wrong <b>PASSWORD</b> value.";
    echo "<b><br><br>3초후 메인페이지로 이동합니다</b><meta http-equiv='refresh' content='3;url=../index.php'>";
  }
}


if($id && $pass)
{
  if(mysqli_num_rows(mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id' AND pass=password('$pass');"))!=0) // 올바른 아이디와 비밀번호가 입력 되었을 때
  {
    session_start();

    $name_search= mysqli_query($db,"SELECT name FROM `member` WHERE id = '$id';") ; //입력한 "아이디"값이 포함된 로우를 DB에서 불러오기.
    $name= mysqli_fetch_array($name_search); //불러온 로우값 중 컬럼 "이름"값 만을 변수 $name안으로 집어넣는다.

    $_SESSION['id'] = $id; // "변수$id의 값"을 "세션 id"에 집어넣는다.
    $_SESSION['name'] = $name[name]; // "세션 name"에 "변수 $name"에 있는 값 중 "컬럼 name" 안에 있는 값을 집어넣는다.
    echo "You send this value to database. <br><b>ID :</b> ".$id."<br><b>PASSWORD :</b> ".$pass."<br><br>";
    echo "You got this value from database. <br><b>NAME :</b> ".$name[name]."<br>";
    echo "<script>alert('로그인 성공.'); </script> <br><br> $id 으로 로그인됨 <b><br><br>=== ACCESS GRENTED ===</b>" ;
    echo "<b><br><br>3초후 메인페이지로 이동합니다</b><meta http-equiv='refresh' content='3;url=../index.php'>";
  }
  else {
    echo "<script>alert('아이디와 패스워드를 확인해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>";
  }
}

else //위의 모든 경우의 수에 속하지 않은 비정상적 접근일 경우

    echo "<script>alert('잘못된 접근입니다. 관리자에게 문의해주세요.'); </script> <b><br><br>=== ACCESS DENIED ===</b>";
 ?>

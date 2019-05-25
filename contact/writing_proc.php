<?php
session_start();
$db = mysqli_connect("localhost","guest","gamesoft","hotel");
$contact_title = $_POST['contact_title'];
$contact_text = $_POST['contact_text'];
$contact_select = $_POST['contact_select'];
?>


<?php
//비회원
if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {

  $contact_name =$_POST['contact_name'];
  $contact_pass =$_POST['contact_pass'];

  echo "<b>=== LOGIN STATUS : OFF ===</b><br><br>";
  echo "You send this value to database. <br><b>문의_제목 (contact_title) :</b> ".$contact_title."<br><b>문의_본문 (contact_text) :</b> ".$contact_text."<br>";
  echo "<b>문의_글쓴이 (contact_name) :</b> ".$contact_name."<br><b>문의_비밀번호 (contact_pass) :</b> ".$contact_pass."<br>";

  $sql = mysqli_query($db,"INSERT INTO `board_contact`
                (`contact_title`,`contact_text`,`contact_select`,`contact_name`,`contact_pass`,`contact_ip`,`contact_see`,`contact_wdate`)
        VALUES ('$contact_title','$contact_text','$contact_select','$contact_name',password('$contact_pass'),'$_SERVER[REMOTE_ADDR]',0,now())");

  $contact_id=mysqli_insert_id($db);

  echo "<b>문의_번호 (contact_id) :</b> ".$contact_id."<br>";
  echo "<b><br><br>2초후 작성한 글로 이동합니다</b><meta http-equiv='refresh' content='2;url=read.php?id=$contact_id'>";

}
//회원
if(isset($_SESSION['id']) || isset($_SESSION['name'])) {

  $id=$_SESSION['id'];

  $name_search= mysqli_query($db,"SELECT * FROM `member` WHERE id = '$id';") ;
  $name= mysqli_fetch_array($name_search);

  $contact_name =$_SESSION['name'];
  $contact_pass = $name[pass];

  echo "<b>=== LOGIN STATUS : ON ===</b><br><br>";
  echo "You send this value to database. <br><b>문의_제목 (contact_title) :</b> ".$contact_title."<br><b>문의_본문 (contact_text) :</b> ".$contact_text."<br>";
  echo "<b>문의_글쓴이 (contact_name) :</b> ".$contact_name."<br><b>문의_비밀번호 (contact_pass) :</b> ".$contact_pass."<br>";

  $sql = mysqli_query($db,"INSERT INTO `board_contact`
                (`contact_title`,`contact_text`,`contact_select`,`contact_name`,`contact_pass`,`contact_ip`,`contact_see`,`contact_wdate`)
        VALUES ('$contact_title','$contact_text','$contact_select','$contact_name','$contact_pass','$_SERVER[REMOTE_ADDR]',0,now())");

  $contact_id=mysqli_insert_id($db);

  echo "<b>문의_번호 (contact_id) :</b> ".$contact_id."<br>";
  echo "<b><br><br>2초후 작성한 글로 이동합니다</b><meta http-equiv='refresh' content='2;url=read.php?id=$contact_id'>";

}

?>

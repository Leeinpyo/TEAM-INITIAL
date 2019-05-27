<?php
$Mroom=$_GET['M'];
?>
<!DOCTYPE HTML>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8">
	<title>시설정보 등록</title>
    <link rel="stylesheet" href="css/MpageSub3.css">
	<script src="../js/jquery-1.11.0.min.js"></script>
	<script>
	function open_in_frame(url) {
	$('#my_frame1').attr('src', url);
	}
	</script>
</head>
<body>
<br /> 
<div id="Minfo">
	<div class="jeongbo">
		<h1>시설정보</h1>
		<div class="rooms">
			<div class="MButton">
				<button type="button" onclick='open_in_frame("Msub03/Mroom1.php")' class="btn btn-outline-dark" >Room1</button>
				<button onclick='open_in_frame("Msub03/Mroom2.php")' class="btn btn-outline-dark">Room2</button>
				<button onclick='open_in_frame("Msub03/Mroom3.php")' class="btn btn-outline-dark">Room3</button>
				<button onclick='open_in_frame("Msub03/Mroom4.php")' class="btn btn-outline-dark">Room4</button>
			</div>
		
		<?php if ($Mroom==1) {
		  echo "<iframe id='my_frame1' src=\"Msub03/Mroom1.php\" ></iframe>";
		} ?>
		<?php if ($Mroom==2) {
		  echo "<iframe id='my_frame1' src=\"Msub03/Mroom2.php\" ></iframe>";
		} ?>
		<?php if ($Mroom==3) {
		  echo "<iframe id='my_frame1' src=\"Msub03/Mroom3.php\" ></iframe>";
		} ?>
		<?php if ($Mroom==4) {
		  echo "<iframe id='my_frame1' src=\"Msub03/Mroom4.php\" ></iframe>";
		} ?>
		<?php if (!($Mroom>=1 && $Mroom<=4)) {
		  echo "<iframe id='my_frame1' src=\"Msub03/Mroom1.php\" '></iframe>";
		} ?>
		</div>
	</div>
</div>
</body>
</html>

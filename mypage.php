<?php
session_start();

if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
{
  echo "<script>alert('잘못된 접근입니다.'); history.back(-1); </script>" ; // 로그인 안된 사람 쫒아냄
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<!--문서모드 최신유지-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="apple-touch-icon-precomposed" href="icon57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon114.png">
<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
<title>INITIAL Introduction</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mypage.css">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    </style>
  </head>

  <body>
  	<div id="stage">

  		<!--모바일 상단-->
  		<header id="header" class="cf">
  			<ul id="s_nav" class="cf">
  				<li class="menu">
  					<a href="index.php" onfocus="blur()">
  						<img src="icon/icon_home2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="room/room.php" onfocus="blur()">
  						<img src="icon/icon_roominfo 2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="notice/notice.php" onfocus="blur()">
  						<img src="icon/icon_notice2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="contact/contact.php" onfocus="blur()">
  						<img src="icon/icon_contact2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="map/map.php" onfocus="blur()">
  						<img src="icon/icon_map2.png" />
  					</a>
  				</li>



          <?php
          if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
          ?>

        </li>
        <li class="menu">
          <a href="signin/signin.php" onfocus="blur()">
            <img src="icon/icon_login2.png" />
          </a>
        </li>

          <?php
          }
          if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
          $id = $_SESSION['id'];
          $name = $_SESSION['name'];
          ?>

        </li>
        <li class="menu">
          <a href="mypage.php" onfocus="blur()">
            <img src="icon/icon_mypage2.png" />
          </a>
        </li>

          <?php
          }
          ?>



  			</ul>

  		</header>

  		<header id="header_fake" class="cf"><!--뒷받침해줌-->
  			<ul id="s_nav_fake" class="cf">
  				<li class="menu">
  					<a href="" onfocus="blur()">
  						<img src="icon/icon_roominfo 1.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="room/room.php" onfocus="blur()">
  						<img src="icon/icon_roominfo 2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="notice/notice.php" onfocus="blur()">
  						<img src="icon/icon_notice2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="contact/contact.php" onfocus="blur()">
  						<img src="icon/icon_contact2.png" />
  					</a>
  				</li>
  				<li class="menu">
  					<a href="map/map.php" onfocus="blur()">
  						<img src="icon/icon_map2.png" />
  					</a>
  				</li>



          <?php
          if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
          ?>

        </li>
        <li class="menu">
          <a href="signin/signin.php" onfocus="blur()">
            <img src="icon/icon_login2.png" />
          </a>
        </li>

          <?php
          }
          if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
          $id = $_SESSION['id'];
          $name = $_SESSION['name'];
          ?>

        </li>
        <li class="menu">
          <a href="mypage.php" onfocus="blur()">
            <img src="icon/icon_mypage2.png" />
          </a>
        </li>

          <?php
          }
          ?>



  		</header>

      <nav id="nav">
  			<div id="submenu">
  				<ul class="cf">

                <?php


                if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
                  echo "<li class=\"s_menu\" style=\"display:inline\"><a href=\"signin/signin.php\">LOGIN</a></li>";
                  echo "<li class=\"s_menu ac\"><a href=\"signup/signup.php\">SIGN UP</a></li>";
                }

                if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
                $id = $_SESSION['id'];
                $name = $_SESSION['name'];
                  echo "<li class=\"s_menu\"><a href=\"index_logout.php\">Logout</a></li>";
                  echo "<li class=\"s_menu ac\"><a href=\"mypage.php\">$name 님</a></li>";
                }

                ?>
  							<li class="s_menu"><a href="index.php">HOME</a></li>
  				</ul>
</body>
</html>

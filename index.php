<?php
session_start();
?>

﻿<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<!--문서모드 최신유지-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon-precomposed" href="icon57.png">
<link rel="apple-touch-icon-precomposed" size="114x114" href="icon114.png">
<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
<title>INITIAL</title>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/slides.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/slides.css">
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
					<a href="#" onfocus="blur()">
						<img src="icon/icon_home1.png" />
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
          <img src="icon/icon_mypage1.png" />
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
          <img src="icon/icon_mypage1.png" />
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
                echo "<li class=\"s_menu\"><a href=\"signup/signup.php\">SIGN UP</a></li>";
              }

              if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
              $id = $_SESSION['id'];
              $name = $_SESSION['name'];
                echo "<li class=\"s_menu\"><a href=\"index_logout.php\">Logout</a></li>";
                echo "<li class=\"s_menu\"><a href=\"mypage.php\">$name 님</a></li>";
              }

              ?>
							<li class="s_menu ac"><a href="#">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="contact/contact.php" >문의사항</a></li>
				<li class="NS odd"><a href="NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="map/map.php">오시는길</a></li>
				<li class="room odd"><a href="room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
			<section id="work" class="cf">
				<ul class="rslides"> <!--슬라이드 이미지-->
					<li><a href="NS/NS.php"><img src="images/1.jpg" alt="room1" /></a></li>
					<li><a href="NS/NS.php"><img src="images/2.jpg" alt="room2" /></a></li>
					<li><a href="NS/NS.php"><img src="images/3.jpg" alt="room3" /></a></li>
					<li><a href="NS/NS.php"><img src="images/4.jpg" alt="room4" /></a></li>
					<li><a href="NS/NS.php"><img src="images/5.jpg" alt="room5" /></a></li>
					<li><a href="NS/NS.php"><img src="images/6.jpg" alt="room6" /></a></li>

				</ul>
			</section>
			<section id="news">
				<h2>NEWS</h2>
				<article>
					<h3>2019.03.11</h3>
					<p><a href="notice/read.php">PC로 접속하신 분은 브라우저의 크기를 줄이시면,
					모바일 화면을 보실수 있슴니다.
					반응형 웹사이트를 잘부탁드립니다.</a></p>
				</article>
				<article>
					<h3>2019.03.11</h3>
					<p><a href="notice/read.php">PC로 접속하신 분은 전화걸기 메뉴와
					구글 메뉴를 사용하실 수 없습니다.
					이용하시려면 모바일로 접속하시면 됩니다.</a></p>
				</article>
				<article>
					<h3>2019.03.11</h3>
					<p><a href="notice/read.php">반응형 웹 디자인으로 사이트 저작을 시작하였습니다.
					인터넷 익스플로러 7, 8, 9, 10, 11 Version에서
					크로스 브라우징을 마쳤습니다.</a></p>
				</article>
			</section>
			<section id="information">
				<h2>INFORMATION</h2>
				<ul>
          <form action=room/room.php method=post>

					<li><a href="room/room.php?R=1"><img src="images/14.jpg" alt="image_box" /></a></li>
					<li><a href="room/room.php?R=2"><img src="images/8.jpg" alt="image_box" /></a></li>
          <li><a href="room/room.php?R=3"><img src="images/13.jpg" alt="image_box" /></a></li>
					<li><a href="room/room.php?R=4"><img src="images/11.jpg" alt="image_box" /></a></li>

          </form>
				</ul>
			</section>
		</div>

		<a href="#top" id="pagetopBtn">
			<img src="images/icn_pagetop1.jpg" alt="pagetop" width="40" height="60"/>
		</a>

		<footer id="footer">
			<div>
				<span class="logo_s"><img src="images/mk_img.png" width="70" alt="" /></span>
				<p>팀이니셜 HOTEL 주소 : 경기도 고양시 덕양구 동헌로 305 <br />
					tel : 000-0000-0000</p>
			</div>
		</footer>
</body>
</html>

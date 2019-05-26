<?php
session_start();
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
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/Introduction.css">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    </style><script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body>
	<div id="stage">

		<!--모바일 상단-->
		<header id="header" class="cf">
			<ul id="s_nav" class="cf">
				<li class="menu">
					<a href="../index.php" onfocus="blur()">
						<img src="../icon/icon_home2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../room/room.php" onfocus="blur()">
						<img src="../icon/icon_roominfo 2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../notice/notice.php" onfocus="blur()">
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" target="_blank" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>

        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
        ?>

        </li>
        <li class="menu">
        <a href="../[link here]" onfocus="blur()">
          <img src="../icon/icon_admin2.png" />
        </a>
        </li>

        <?php
        }
        ?>

        <?php
        if(!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login2.png" />
        </a>
      </li>

        <?php
        }
        if(isset($_SESSION['id']) && isset($_SESSION['name']) && empty($_SESSION['admin'])) {
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        ?>

      </li>
      <li class="menu">
        <a href="../mypage.php" onfocus="blur()">
          <img src="../icon/icon_mypage1.png" />
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
						<img src="../icon/icon_home2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../room/room.php" onfocus="blur()">
						<img src="../icon/icon_roominfo 2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../notice/notice.php" onfocus="blur()">
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" target="_blank" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>

        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
        ?>

        </li>
        <li class="menu">
        <a href="../[link here]" onfocus="blur()">
          <img src="../icon/icon_admin2.png" />
        </a>
        </li>

        <?php
        }
        ?>

        <?php
        if(!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login2.png" />
        </a>
      </li>

        <?php
        }
        if(isset($_SESSION['id']) && isset($_SESSION['name']) && empty($_SESSION['admin'])) {
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        ?>

      </li>
      <li class="menu">
        <a href="../mypage.php" onfocus="blur()">
          <img src="../icon/icon_mypage1.png" />
        </a>
      </li>

        <?php
        }
        ?>



      </ul>

		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">

          <?php

          if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
            echo "<li class=\"s_menu\"><a href=\"../index_logout.php\">Logout</a></li>";
            echo "<li class=\"s_menu\"><a href=\"../[link here]\">관리자</a></li>";
          }

          if(!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
            echo "<li class=\"s_menu\" style=\"display:inline\"><a href=\"../signin/signin.php\">LOGIN</a></li>";
            echo "<li class=\"s_menu\"><a href=\"../signup/signup.php\">SIGN UP</a></li>";
          }

          if(isset($_SESSION['id']) && isset($_SESSION['name']) && empty($_SESSION['admin'])) {
          $id = $_SESSION['id'];
          $name = $_SESSION['name'];
            echo "<li class=\"s_menu\"><a href=\"../index_logout.php\">Logout</a></li>";
            echo "<li class=\"s_menu\"><a href=\"../mypage.php\">$name 님</a></li>";
          }

          ?>

							<li class="s_menu"><a href="../index.php">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="../images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd"><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction active"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
		<section id="content" class="cf">
			<img src="images/introduction.png" alt="" />
			<h1 class="team">팀이니셜</h1>
			<p class="team">팀이니셜 간단한 설명 글 작성하기</p>
      <hr>
			<br><p class="team">팀장 (Team leader)</p>
      <hr>
      <h1 class="team">정기완 컴퓨터학과 91119458</h1>
			<p class="team">-예산 및 일정 관리 책임자<br>-조원간의 커뮤니케이션 관리 및 중재<br>-프레젠테이션 발표</p>
      <br>
			<hr>
			<br><p class="team">프론트 엔드 (Front-end)</p>
      <hr>
      <h1 class="team">황혜진 게임소프웨어학과 91616183</h1>
			<p class="team">-웹 디자인 설계 및 구현<br>-CSS,HTML 이 들어간 전반적인 기능 제작<br>-이미지 소스 제작 </p>
      <br>
      <h1 class="team">신은혜 게임소프웨어학과 91615969</h1>
			<p class="team">-웹 디자인 설계 및 구현<br>-CSS,HTML 이 들어간 전반적인 기능 제작<br>-이미지 소스 제작</p>
      <hr>
			<br><p class="team">백 엔드 (Back-end)</p>
      <hr>
      <h1 class="team">이인표 게임학과 91215848</h1>
      <p class="team">-개발환경 단일화를 통한 작업 효율 극대화<br>-MYSQL,PHP 가 들어간 전반적인 기능 제작<br>-데이터베이스의 구조설계 및 구축</p>


		</section>

	</div><!-- id="contents" -->

		<a href="#top" id="pagetopBtn">
			<img src="../images/icn_pagetop1.jpg" alt="pagetop" width="40" height="60"/>
		</a>

		<footer id="footer">
			<div>
				<span class="logo_s"><img src="../images/mk_img.png" width="70" alt="" /></span>
				<p>팀이니셜 HOTEL 주소 : 경기도 고양시 덕양구 동헌로 305 <br />
					tel : 000-0000-0000</p>
			</div>
		</footer>
</body>
</html>

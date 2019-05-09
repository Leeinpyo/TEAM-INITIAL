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
<link rel="shortcut icon" href="../favicon.ico">
<link rel="apple-touch-icon-precomposed" href="../icon57.png">
<link rel="apple-touch-icon-precomposed" size="114x114" href="../icon114.png">
<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
<title>INITIAL Notice</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/notice.css">
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
					<a href="#" onfocus="blur()">
						<img src="../icon/icon_notice1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>



        <?php
        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
        ?>

      </li>
      <li class="menu">
        <a href="../signin/signin.php" onfocus="blur()">
          <img src="../icon/icon_login2.png" />
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
					<a href="#" onfocus="blur()">
						<img src="../icon/icon_notice2.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../contact/contact.php" onfocus="blur()">
						<img src="../icon/icon_contact1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
			</ul>

		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">

                        <?php


                        if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
                          echo "<li class=\"s_menu\" style=\"display:inline\"><a href=\"../signin/signin.php\">LOGIN</a></li>";
                          echo "<li class=\"s_menu\"><a href=\"../signup/signup.php\">SIGN UP</a></li>";
                        }

                        if(isset($_SESSION['id']) || isset($_SESSION['name'])) {
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
				<li class="notice active"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd "><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
			<section id="content" class="cf">
				<img src="images/room2.png" alt="" />
			</section>
			<div class="boximg_1">
				<table class="tc">
					<thead class="g1">
						<tr>
							<th class="t1"><p>번호</p></th>
							<th class="t2"><p>제목</p></th>
							<th class="t3"><p>작성자</p></th>
							<th class="t3"><p>날짜</p></th>
							<th class="t1 d01"><p>조회</p></th>
						</tr>
					</thead>
					<tbody>
						<tr class="g2">
								<td class="t1"><p>1</p> </td>
								<td class="t2"><p class="COver" onclick="location='read.php'" style="cursor:pointer">공지사항 게시판 입니다.</p></td>
								<td class="t3"><p>관리자</p></td>
								<td class="t3"><p>2019.04.09</p></td>
								<td class="t1 d01"><p>1</p></td>
						</tr>
						<tr class="g3">
							<td class="t1"><p>2 </p></td>
							<td class="t2"><p class="COver" onclick="location='read.php'" style="cursor:pointer">이곳은 자연과 함께하는 IMITAL HOUSE입니다.</p></td>
							<td class="t3"><p>관리자</p></td>
							<td class="t3"><p>2019.04.01</p></td>
							<td class="t1 d01"><p>15</p></td>
						</tr>
					</tbody>
				</table>
				<div class="n1">
					<div class="n">
						<input class="test" type=button value="글쓰기"  OnClick="location='writing.php'"/>
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
						<input type="text"/>&nbsp;<input type=button value="글찾기"/>
					</div>
				</div>

			</div>
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

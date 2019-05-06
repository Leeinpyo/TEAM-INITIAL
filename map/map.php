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
<title>INITIAL MAP</title>
<script src="js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/map.css">
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
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map1.png" />
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
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map1.png" />
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
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
				<li class="contact odd"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd"><a href="../NS/NS.php">주변경관</a></li>
				<li class="map active"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
			<section id="content" class="cf">
				<img src="images/room2.png" alt="" />
				<div class="mapbox">
					<table class="Nmap" cellpadding="0" cellspacing="0">
					<tr class="maps">
					<td style="border:1px solid #cecece;">
					<a href="https://map.naver.com/?query=&searchCoord=&tab=1&lng=180e7464d5dc153c82425b67d3d30b12&mapMode=0&mpx=d867427572857e59896728de1adaf2a58ae25331c706201c8faeef4efad370c9c6fd0501e40a26b9949762b3470a66f6&pinId=21274596&lat=890136d72abc0eb314711ffebe69fa67&dlevel=10&enc=b64&__pinOnly=false&menu=location&__fromRestorer=true&pinType=site" target="_blank"><img src="http://prt.map.naver.com/mashupmap/print?key=p1554548400769_859925959" alt="네이버 지도로 이동" title="네이버 지도로 이동" style="vertical-align:top;"/></a></td> </tr> <tr> <td> <table cellpadding="0" cellspacing="0" width="100%"> <tr> <td height="30" bgcolor="#f9f9f9" align="left" style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;"> <span style="font-family: tahoma; font-size: 11px; color:#666;">2019.4.6</span>&nbsp;<span style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;<a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;" href="https://map.naver.com/?query=&searchCoord=&tab=1&lng=180e7464d5dc153c82425b67d3d30b12&mapMode=0&mpx=d867427572857e59896728de1adaf2a58ae25331c706201c8faeef4efad370c9c6fd0501e40a26b9949762b3470a66f6&pinId=21274596&lat=890136d72abc0eb314711ffebe69fa67&dlevel=10&enc=b64&__pinOnly=false&menu=location&__fromRestorer=true&pinType=site" target="_blank">네이버 지도로 이동</a> </td> <td width="98" bgcolor="#f9f9f9" align="right" style="text-align:right; padding-right:9px; border-right:1px solid #cecece; border-bottom:1px solid #cecece;"> <span style="float:right;"><span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">&copy;&nbsp;</span>&nbsp;<a style="font-family:tahoma; font-size:9px; font-weight:bold; color:#2db400; text-decoration:none;" target="_blank">NAVER Corp.</a></span> </td> </tr> </table> </td> </tr> </table>
					<div class="waycom">
						<h3> 길안내 </h3>
						<p> 주소 : 경기도 고양시 덕양구 동헌로 305(대자동 613-1) <br>전화 : 000-0000-0000</p>
		<h3> 찾아 오시는길 </h3>
						<p>통일로IC(문산,관산동방향) → 대자삼거리에서 우회전(의정부,고양동방향) → 고양2교 삼거리에서 좌회전 → 고양동 사거리에서 좌측 11시방향 → 하늘소리너싱홈 지나서 우회전 → 중부대학교 고양캠퍼스 </p>
					</div>
			 </div>
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

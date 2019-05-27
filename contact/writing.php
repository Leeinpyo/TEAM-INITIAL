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
<title>INITIAL Notice writing</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="css/writing.css">
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
						<img src="../icon/icon_contact1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>

        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
        ?>

        </li>
        <li class="menu">
        <a href="../masterpage/Mpage.php" onfocus="blur()">
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
        $admin = $_SESSION['admin'];
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
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				<ul>

		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">

                        <?php

                        if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
                          echo "<li class=\"s_menu\"><a href=\"../index_logout.php\">Logout</a></li>";
                          echo "<li class=\"s_menu\"><a href=\"../masterpage/Mpage.php\">관리자</a></li>";
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
				<li class="contact active"><a href="../contact/contact.php">문의사항</a></li>
				<li class="NS odd "><a href="../NS/NS.php">주변경관</a></li>
				<li class="map odd"><a href="../map/map.php">오시는길</a></li>
				<li class="room odd"><a href="../room/room.php">객실소개</a></li>
				<li class="Introduction odd"><a href="../Introduction/Introduction.php">소개글</a></li>
			</ul>
		</nav>
	</div>
	<div id="contents" class="cf">
			<section id="content" class="cf">
				<img src="images/contact.png" alt="" />


        <form action=writing_proc.php method=post>


				<table class="tc">
					<thead>
						<td>
							<th>글쓰기
						</td>
					</thead>
					<tbody>
						<tr>
							<th>문의유형: </th>
							<td>
								<select class="s1" name="contact_select">
									<option value="0">예약관련</option>
									<option value="1">결제관련</option>
									<option value="2">기타문의</option>
								</select>                             <!--문의_유형선택 contact_select -->
							</td>
						</tr>
						<tr>
							<th>제목: </th>
							<td><input type="text" class="t1" placeholder="제목을 입력하세요. " required="required" name="contact_title" /></td>
						</tr>                                     <!--문의_제목 contact_title -->
						<tr>
							<th>내용: </th>
							<td><textarea cols="50" rows="10" class="t1 t2"  placeholder="내용을 입력하세요. " required="required" name="contact_text" /></textarea></td>
						</tr>                                     <!--문의_본문 contact_text -->
						<tr>
							<th>첨부파일: </th>
							<td><input type="text" class="t1 t3"  placeholder="파일을 선택하세요. " name="file"/><input type=button class="t4" value="파일찾기"/></td>
						</tr>                                     <!--첨부파일 -->

            <?php

            if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {

              echo "  <tr>
                          <th>이름: </th>
                          <td><input type=\"text\" class=\"t1\"  placeholder=\"이름을 입력하세요\" required=\"required\" name=\"contact_name\" /></td>
                      </tr>";//문의_글쓴이 contact_name

              echo "  <tr>
                          <th>비밀번호: </th>
                          <td><input type=\"password\" class=\"t1\"  placeholder=\"비밀번호를 입력하세요\" required=\"required\" name=\"contact_pass\" /></td>
                      </tr>";//문의_비밀번호 contact_pass

            }

            if(isset($_SESSION['id']) || isset($_SESSION['name'])) {

              echo "  <tr>
                          <th>이름: </th>
                          <td><input type=\"text\" class=\"t1\"  placeholder=\" $name\" disabled/></td>
                      </tr>";

              echo "  <tr>
                          <th>아이디: </th>
                          <td><input type=\"text\" class=\"t1\"  placeholder=\" $id\" disabled/></td>
                      </tr>";

            }

            ?>


						<tr>
              <th>
								<!-- <input class="th1" type="reset" value="초기화"/>  주석처리됨 -->
							</th>
							<td class="td1">
								<input type="submit" value="등록"/>
								<input type="button" value="글 목록" onclick="location='contact.php'"/>
							</td>
						</tr>
					</tbody>
				</table>


        </form>


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

<?php
session_start();


$board=`board_contact`;
$conn=mysqli_connect("localhost","guest","gamesoft","hotel");//데이터베이스 연결
$db = mysqli_connect("localhost","guest","gamesoft","hotel");


# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=7;

# 2. 페이지 나누기에 표시될 페이지의 수
$page_list_size = 4;


//$no 값이 안넘어 오거나 잘못된(음수)값이 넘어오는 경우 0으로 처리
$no = $_GET[no];

if (!$no || $no <0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM `board_contact` ORDER BY contact_id DESC LIMIT $no,$page_size";
$result = mysqli_query($conn,"SELECT * FROM `board_contact` ORDER BY contact_id DESC LIMIT $no,$page_size");

// 총 게시물 수 를 구한다.
$result_count=mysqli_query($conn,"SELECT count(*) FROM `board_contact`");
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];


# 총 페이지 계산
if ($total_row <= 0) $total_row = 0; // 총게시물의 값이 없거나 할경우 기본값으로 세팅

$total_page = floor(($total_row - 1) / $page_size);

# 현재 페이지 계산
$current_page = floor($no/$page_size);


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
    <link rel="stylesheet" href="css/contact.css">
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
					<a href="#.php" onfocus="blur()">
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
        <a href="../signin/signin.php" onfocus="blur()">
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
						<img src="../icon/icon_notice1.png" />
					</a>
				</li>
				<li class="menu">
					<a href="#" onfocus="blur()">
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

		</header>

		<nav id="nav">
			<div id="submenu">
				<ul class="cf">

                        <?php

                        if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['admin'])) {
                          echo "<li class=\"s_menu\"><a href=\"../index_logout.php\">Logout</a></li>";
                          echo "<li class=\"s_menu\"><a href=\"../masterlogin/insertM.php\">관리자</a></li>";
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


<?
  while($row=mysqli_fetch_array($result))
  {
?>


            <tr class="g2">
                <td class="t1"><p><?=$row[contact_id]?></p> </td>
                <td class="t2"><p class="COver" onclick="location='read.php?id=<?=$row[contact_id]?>&no=<?=$no?>'" style="cursor:pointer"><?=$row[contact_title]?></p></td>
                <td class="t3"><p><?=$row[contact_name]?></p></td>

                <?
                  $substr_wdate = mb_substr($row[contact_wdate], '0', '10', 'utf-8');
                ?>

                <td class="t3"><p><?=$substr_wdate?></p></td>
                <td class="t1 d01"><p><?=$row[contact_see]?></p></td>
            </tr>


<?
  } // end While
?>


					</tbody>
				</table>
				<div class="n1">

          <hr>

					<div class="n">

						<ul>

              <?php
              # 페이지 리스트의 첫번째로 표시될 페이지가 몇번째 페이지인지 구하는 부분

              $start_page = (int)($current_page / $page_list_size)
                  * $page_list_size;

              # 페이지 리스트의 마지막 페이지가 몇번째 페이지인지 구하는 부분

              $end_page = $start_page + $page_list_size - 1;
              if ($total_page <$end_page) $end_page = $total_page;

              # 이전 페이지 리스트 보여주기

              if ($start_page >= $page_list_size) {
                  $prev_list = ($start_page - 1)*$page_size;
                  echo "<li><a href=\"$PHP_SELF?no=$prev_list\">◀</a></li> ";
              }
              else  {
                      echo "<li>◁</a></li> ";
                    }

              # 페이지 리스트를 출력
              for ($i=$start_page;$i <= $end_page;$i++) {
                  $page=$page_size*$i; // 페이지값을 no 값으로 변환.
                  $page_num = $i+1; // 실제 페이지 값이 0부터 시작하므로 표시할때는 1을 더해준다.

                  echo "<li>";

                  if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
                      echo "<a href=\"$PHP_SELF?no=$page\">";
                  }

                  echo " $page_num "; //페이지를 표시

                  if ($no!=$page){
                      echo "</a></li>";
                  }
              }
              if($total_page >$end_page)
              {
                  $next_list = ($end_page + 1)* $page_size;
                  echo "<li><a href=$PHP_SELF?no=$next_list>▶</a></li>";
              }
              else  {
                    echo "<li>▷</a></li> ";
                    }

              ?>
						</ul>
            <div align="right">
            <input type="text" style="width:100px";/>&nbsp;<input type=button value="글찾기"/>
            <input class="test" type=button value="글쓰기"  OnClick="location='writing.php'"/>
            </div>
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

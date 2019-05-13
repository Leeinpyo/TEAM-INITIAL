


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
		<section id="content" class="cf">
		<img src="images/mypage.png" alt="" />
			<div class="profile">
				<ul>
					<li>
						<h1 class="">아이디</h1>
						<p class=""><?=$id?></p>
					</li>
					<li>
						<h1 class="">비밀번호</h1>
						<p class=""><?=$password?></p>
					</li>
					<li>
						<h1 class="">이름</h1>
						<p class=""><?=$name?></p>
					</li>
					<li>
						<h1 class="">생년월일</h1>
						<p class=""></p>
					</li>
					<li>
						<h1 class="">성별</h1>
						<p class=""></p>
					</li>
					<li>
						<h1 class="">연락처</h1>
						<p class=""></p>
					</li>
					<li>
						<h1 class="">메일주소</h1>
						<p class=""></p>
					</li>
					<input type="button" value="로그아웃" onclick="location='index_logout.php'"/>
					<input type="button" value="정보수정" onclick=""/>
				</ul>
				
			</div>
			<div class="reservation">
				<img src="images/reservation.png" alt="" />
				<ul class="Rroom">
					<li>
						<ul>
							<li><h1>room 이름</h1>
						<p class=""></p></li>
							<li><h1>room 예약 날짜</h1>
						<p class=""></p></li>
							<li><h1>room 예약 인원</h1>
						<p class=""></p></li>
							<li><h1>room 금액</h1>
						<p class=""></p></li>
						</ul>
						<input type="button" value="예약 문의"/>
						<input type="button" value="예약 취소"/>
					</li>
					<li class="Rlist">
						<ul>
							<li><h1>room 이름</h1>
						<p class=""></p></li>
							<li><h1>room 예약 날짜</h1>
						<p class=""></p></li>
							<li><h1>room 예약 인원</h1>
						<p class=""></p></li>
							<li><h1>room 금액</h1>
						<p class=""></p></li>
						</ul>
						<input type="button" value="예약 문의"/>
						<input type="button" value="예약 취소"/>
					</li>
				</ul>
			</div>
			<div class="NaGul">
				<img src="images/NaGul.png" alt="" />
				<ul class="NaGulHwagIn">
					<li class="NaGul1">
						<a href="#">
							<ul>
								<li class="NaGulTitle">글제목!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 글제목!!!!!!!!!!!</li>
								<li class="NaGulDay">2019.05.14</li>
								<li class="answer"> 답변 대기 중</li>
							</ul>
						</a>
						<input type="button" value="X"/>
					</li>
					
					<li class="NaGul1">
						<ul>
							<li class="NaGulTitle">글제목글제목글제목글제목글제목글제목글제목글제목글제목글제목글제목글제목글제목</li>
							<li class="NaGulDay">2019.05.14</li>
							<li class="answer2">답변 완료 <!-- 답변 대기 중--></li>
						</ul>
						<input type="button" value="X"/>
					</li>
					<li class="NaGul1">
						<ul>
							<li class="NaGulTitle">글제목</li>
							<li class="NaGulDay">2019.05.14</li>
							<li class="answer2">답변 완료 <!-- 답변 대기 중--></li>
						</ul>
						<input type="button" value="X"/>
					</li>
					<li class="NaGul1">
						<ul>
							<li class="NaGulTitle">글제목</li>
							<li class="NaGulDay">2019.05.14</li>
							<li class="answer2">답변 완료 <!-- 답변 대기 중--></li>
						</ul>
						<input type="button" value="X"/>
					</li>
					<li class="NaGul1">
						<ul>
							<li class="NaGulTitle">글제목</li>
							<li class="NaGulDay">2019.05.14</li>
							<li class="answer2">답변 완료 <!-- 답변 대기 중--></li>
						</ul>
						<input type="button" value="X"/>
					</li>
				</ul>
			</div>
			<div class="contract">
				<img src="images/contract.png" alt="" />
				<ul class="contractA">
					<li>
					업무방해·소란행위의 금지
						업무방해의 금지
						이용객은 못된 장난 등으로 다른 이용객 또는 사업자 등의 업무를 방해하지 않도록 주의해야 합니다(「경범죄 처벌법」 제3조제2항제3호).
						※ 위의 업무방해행위를 하면 16만원의 범칙금이 부과됩니다(「경범죄 처벌법」 제3조제2항제3호 및 「
						경범죄 처벌법 시행령」 별표).
						소란행위의 금지
						악기·라디오·텔레비전·전축·종·확성기·전동기 등의 소리를 지나치게 크게 내거나 큰소리로 떠들거나 노래를 불러서 이웃을 시끄럽게 하지 않도록 주의해야 합니다(「경범죄 처벌법」제3조제1항제21호).
						※ 위의 인근소란 등의 행위를 하면 5만원의 범칙금이 부과됩니다(「경범죄 처벌법」 제3조제1항제21호 및 「경범죄 처벌법 시행령」 별표).
						이용약관의 준수
						이용약관의 확인
						펜션을 이용할 때는 특별히 정해진 약관이 없는 경우도 있지만, 펜션 사업자가 미리 정해놓은
						이용약관에 따라 계약과 이용이 이루어지는 경우가 많습니다.
						이용약관은 펜션의 인터넷 홈페이지를 통해서 확인하거나 펜션시설에 게시된 내용으로 확인할 수
						찾기쉬운 생활법령 2 / 4
						있으며, 펜션 사업자에게 요청해서 확인할 수도 있습니다.
						일반적으로 이용약관에서는 다음의 사항을 확인할 수 있습니다.
						1. 입실시간 및 입실절차
						2. 퇴실시간 및 퇴실절차
						3. 예약 및 예약취소에 관한 사항
						4. 객실 내 취사행위에 관한 사항
						5. 객실비품의 훼손에 따른 사항
						6. 반려동물의 동반 여부
						7. 그 밖의 이용객 준수사항
					</li>
				</ul>
				<input type="button" value="회원탈퇴" onclick=""/>
				
			</div>
		</section>

	</div><!-- id="contents" -->

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

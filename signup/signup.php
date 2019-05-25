<?php
session_start();

if(isset($_SESSION['id']) || isset($_SESSION['name']))
{
  echo "<script>alert('이미 로그인 하셨습니다.'); history.back(-1); </script>" ; // 로그인 된 사람 쫒아냄
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
<link rel="apple-touch-icon-precomposed" href="../icon57.png">
<link rel="apple-touch-icon-precomposed" size="114x114" href="../icon114.png">
<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
<title>INITIAL signup</title>
<script src="../js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/signup.css">
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
					<a href="../map/map.php" onfocus="blur()">
						<img src="../icon/icon_map2.png" />
					</a>
				</li>
				</li>
				<li class="menu">
					<a href="../signin/signin.php" onfocus="blur()">
						<img src="../icon/icon_login1.png" />
					</a>
				</li>
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
							<li class="s_menu" style="display:inline"><a href="../signin/signin.php">LOGIN</a></li>
							<li class="s_menu ac"><a href="../signup/signup.php">SIGN UP</a></li>
							<li class="s_menu"><a href="../index.php">HOME</a></li>
				</ul>
			</div>
			<ul id="main" class="cf"> <!--상단 바 이동 링크-->
				<li class="logo odd"><img src="../images/mk_img.png" width="100" alt="" /></li>
				<li class="notice odd"><a href="../notice/notice.php">게시판</a></li>
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
				<img src="images/signup.png" alt="" />
				<p>&nbsp;필요사항을 입력하고 마지막으로 [회원가입]을 눌러 주십시오.</p>
				<form action="signup_proc.php" method="post">
					<dl class="tbl_layout">
						<dt>아이디</dt>
						<dd>
							<input type="text" placeholder="아이디 입력" required="required" class="w300" name="u_id" id="u_id"/>
						</dd>
						<dt>비밀번호</dt>
						<dd>
							<input type="password" placeholder="비밀번호 입력" required="required" class="w300" name="u_pass" id="u_pass"/>
						</dd>
						<dt>비밀번호 확인</dt>
						<dd>
							<input type="password" placeholder="비밀번호 재입력" required="required" class="w300" name="u_pass2" id="u_pass2"/>
						</dd>
						<dt>이 름</dt>
						<dd>
							<input type="text" placeholder="이름 입력" required="required" class="w300" name="u_name" id="u_name"/>
						</dd>
						<dt>생년월일</dt>
						<dd>
							<select name="u_age">
								<?php
									for($i=2019; $i>=1920; $i--){
										echo "<option value=\"$i\">$i</option>";
									}
								?>
							</select>
							<select name="u_mon">
								<?php
								for($i=1; $i<=12; $i++){
										echo "<option value=\"$i\">$i</option>";
									}
								?>
							</select>
							<select name="u_day">
								<?php
								for($i=1; $i<=30; $i++){
										echo "<option value=\"$i\">$i</option>";
									}
								?>
							</select>
						</dd>
            <dt>성별</dt>
            <dd>
              <select name="gender">
                <?php
                  {
                    echo "<option value=\"0\">남성</option>";
                    echo "<option value=\"1\">여성</option>";
                  }
                ?>
              </select>
            </dd>
						<dt>연락처</dt>
						<dd>
							<input type="tel" placeholder="휴대폰 번호" required="required" name="tel1" id="tel1"/>
							<span> (숫자) </span>
						</dd>
						<dt class="bdchange">메일주소</dt>
						<dd class="bdchange">
							<input type="email" placeholder="이메일" required="required" name="email" id="email"/>
							<span> (영 숫자) </span>
						</dd>
					</dl>
					<p class="btn">
						<input type="image" alt="입력 내용 확인" src="images/btn.png" value="submit"/>
					</p>
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

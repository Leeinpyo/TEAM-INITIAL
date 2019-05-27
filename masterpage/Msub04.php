<?php


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
<!DOCTYPE HTML>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8">
	<title>공지사항 관리</title>
    <link rel="stylesheet" href="css/MpageSub4.css">
</head>
<body>
<body>
<br />
<div id="Minfo">
	<h1>공지사항 관리</h1>
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
				</div>
			</div>
		</div>
	</div>
	<button type="button" class="btn btn_gry" >삭제</button>
	<button type="button" class="btn btn_gry" onclick="window.open('Mwriting.php','window_name','width=430,height=400,location=no,status=no,scrollbars=yes');">추가</button>
</div>
</body>
</html>

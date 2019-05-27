
<!DOCTYPE HTML>
<html lang="ko-KR">
<head>
	<meta charset="UTF-8">
	<title>공지사항 관리</title>
    <link rel="stylesheet" href="css/MpageW.css">
</head>
<body>
<br />
<div id="Minfo">
	<form action=writing_proc.php method=post>


				<table class="tc">
					<thead>
						<td>
							<th><h2>글쓰기</h2></th>
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
							<td><input type="file" value="파일찾기"/></td>
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
							</td>
						</tr>
					</tbody>
				</table>


        </form>
</div>
</body>
</html>

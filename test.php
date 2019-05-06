<?php
/*
for($i=0; $i<=10; $i++){
  echo "abcd<br>";
  echo $i."<br>";
}

//$fp=fopen("D:\NGXMP\www\hotel\java.txt","r");
//fgets()
$data=file("D:\NGXMP\www\hotel\java2.txt");
//echo "<textarea>";
//for($j=0; $j<sizeof($data); $j++)
//{
//  echo "$data[$j]<br>";
//}echo "</textarea>"
// 다른방법
echo "<textarea>";
foreach($data as $data){
  echo $data;
}
echo "</textarea>"; //파일 불러오기
*/

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

echo $onlyconsonants."<br>";

$a="innocentblue innocentblue";
$b="aW5ub2NlbnRibHVlIGlubm9jZW50Ymx1ZQ==";

echo base64_encode($a)."<br>";
echo base64_decode($b);

?>

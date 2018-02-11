
<html>
<head>
<meta charset="utf-8"/>
<title>リボ払い TEST</title></head>
<body>
<div class = "ansr_con" align="center">
<?php
// textで受け取ったデータを数列に変換
$kin = ($_POST['kin']/100)+1;
$total = $_POST['kari'];
$m_pay = $_POST['m_pay'];


// echo $kin;
// echo $total;
// echo $m_pay;

// 改行は""(ダブルクォーテーション)
echo"借入額：".$total."円"."<br/>";
echo "月々の支払：".$m_pay."円"."<br/>";

$y_pay=$m_pay*12;
// var_dump($y_pay);
$arr_total= [];
$i = 1;

while($total > 0){
$dummy_pay= 0;
$total = $total*$kin;
$dummy_pay = $total;
echo $i."年目"."残り".(int)$total."円"."<br/>";

      if ($total > $y_pay) {
        $total = $total - $y_pay;
         array_push($arr_total, $y_pay);
      }else{
      // 今年で支払い終える時
      array_push($arr_total, $total);
       break;
      }

$i++;
  }
// var_dump($arr_total);
$sum=array_sum($arr_total);
// if ($sum < 0) {
//   $sum= $total;
// }else{

// }

echo"支払総額：".(int)$sum.'円';
?>
</div>
</body>
</html>

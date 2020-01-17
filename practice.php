<?php
echo 'hello php!';
    $a = 3;
    $b = 7;
    echo $a + $b;
    
    $array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
    echo $array_month[7];
    
    $hello = "Hello";
    $name = "片岡";
    $world = "'s Wold!";
    echo $hello.$name.$world;
    
    $tech_boost = "tech";
    $tech_boost .= ' boost';
    echo $tech_boost;
    
    $calendar_2018 = [  
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
// 12月を表示する
echo $calendar_2018["December"];

$name = "片岡";
if($name == "片岡"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}
$total = 0;
for($i = 0; $i<=10000; $i++){
    $total += $i;
}

echo $total;

$fruits = array("apple","strawberry","apricot","persimmon","kiwi fruit");
foreach($fruits as $fruit){
 echo $fruit.'\n';
}
/* for文の初めの値を定義する */
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
    }
}
?>
<?php
//1-10までを足した値を返す関数
function sum($max){
    //$resultは結果を保存する変数
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
//関数を実行する
echo sum(100);

function double($aa){
    return $aa*2;
}
echo double(10);

function f($a,$b){
    return $a+$b;
}
echo f(2,4);

function u($arr){
    $total = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $total*= $arr[$i];
    }
    return $total;
}
echo u(array(1, 3, 5 ,7, 9));

function max_array($arr){
    //配列の最初の要素を一番大きい値にする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(1, 3, 5 ,7, 9));

$h1 = '<h1>片岡</h1>';
$dd = strip_tags($h1);
echo $dd;

$oo = array("片岡","慎太郎");
 array_push($oo,"かたおか","しんたろう");
 print_r($oo) ;

$array1 = [23,34,57];
$array2 = [55,77,99];
$array3 = [90,80,70];
//結合
$array = array_merge($array1,$array2,$array3);

print_r($array);

//現在のタイプスタンプ
echo time();

//4日後のタイムスタンプ 先頭の日にちを変えるだけ
$next = time() + (4 * 24 * 60 * 60);
echo $next;

//現在のタイムスタンプ
echo mktime();

//指定する場合、秒、分、時、日、月、年の順番
$next3 = mktime(0,0,0,7,4,1994);
echo $next3;
//上記の曜日を取得する（日本語）
$data = date('w',$next3);
$week = [
    '日',//0
    '月',//1
    '火',//2
    '水',//3
    '木',//4
    '金',//5
    '土',//6
    ];
    
//日本語で曜日を出力
echo $week[$data].'曜日';

?>
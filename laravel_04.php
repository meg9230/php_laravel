<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function twice($number) {
    $number *= 2;
    return $number;
}
echo twice(35);
echo "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
// 　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
function total($a, $b){
    $total = $a + $b;
    return $total;
}
echo total(15, 40);
echo "\n";

// 3.$arr という配列の仮引数を持ち、
// 数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function totalNumber($arr) {
    $result = 1;
    foreach($arr as $arrNumber) {
        $result *= $arrNumber;
    }
    return $result;
}
$numbers = array(1, 3, 5, 7, 9);
echo totalNumber($numbers);
echo "\n";

// 4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
// 途中の部分を完成させてください。
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}
// 正解確認用コード
$sample = array(20, 14, 3, 55, 89);
echo max_array($sample);
echo "\n";

// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// strip_tags　文字列からタグを取り除く

$string = '<h2 class="text-title">Access</h2>';
$result = strip_tags($string);
echo $result;
echo "\n";

// array_push　　末尾にデータを追加する
$data = array(10, 20, 39, 45, 22, 80);
$newData = array(55, 66, 77);
array_push($data, $newData);
var_dump($data);
echo "\n";

// array_merge 　配列をマージさせる
$data = array("France" => "100", "Japan" => "80", "Italia" => "40", "US" => "90");
$newData = array("France" => "250", "Canada" => "140");
$result = array_merge($data, $newData);
var_dump($result);
echo "\n";

// time 　UNIXのタイムスタンプを表示する
$now = time();
echo $now;
echo "\n";

// mktime  日付をUNIXのタイムスタンプとして取得する
date_default_timezone_set ('Asia/Tokyo');
$timestamp = mktime(20, 57, 30, 08, 20, 2020);
echo $timestamp;
echo "\n";

// date  UNIXタイムスタンプを日付にする
$nextWeekTimestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日h時i分s秒', $nextWeekTimestamp);
echo $next_week;

<?php //switch文
$people = 'Saburo';

switch ($people) {
  case 'Taro':
    echo '太郎です';
    break;
  case 'Jiro':
    echo '次郎です';
    break;
  case 'Saburo':
    echo '三郎です';
    break;
}
?>

<?php //if文
$a = 7;

if ($a > 5) {
  $b = "TRUE"; //条件式が真の時，処理される
} else {
  $b = "FALSE";
}
echo $b;
?>

<?php //三項演算子
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";

echo $b;
?>

<?php
$a = 7;
$b = 5;
$sum = $a + $b;

$answer = 12;

if ($sum === $answer) {
  echo '正解です';
} elseif ($sum === 11 || $sum === 13){
  echo '不正解ですが惜しいです';
} else {
  echo '不正解です';
}
?>

<?php
$english = 'right';
switch($english){
  case 'up':
    echo '日本語で「上」です。';
    break;
  case 'right':
    echo '日本語で「右」です。';
    break;
  case 'down':
    echo '日本語で「下」です。';
    break;
  case 'left':
    echo '日本語で「左」です。';
    break;
  default:
    echo '該当する日本語が見つかりませんでした。';
}
  echo'<br>'
?>

<?php
$array = ['Taro','Jiro','Saburo'];
$Saburo = $array[2]; //変数名[インデックス番号]
var_dump($Saburo);
echo '<br>'
?>

<?php
$array = ['Taro', 'Jiro', 'Saburo'];
$sum = count($array);
var_dump($sum);
echo '<br>'
?>

<?php //データの追加
$array = ['Taro','Jiro','Saburo'];
//array_push(配列の変数名，追加したい値)
array_push($array,"Shirou");
var_dump($array);
echo '<br>'
?>

<?php //データの削除
$array = ['Taro', 'Jiro', 'Saburo'];  // array_pop(配列の変数名)
array_pop($array);
var_dump($array);
echo '<br>'
?>

<?php //配列同士の結合
$array = ['Taro', 'Jiro', 'Saburo'];
$marge = ['Shiro', 'Gorou', 'Rokurou'];
// array_merge(追加される配列, 追加する配列)
$result = array_merge($array, $marge);
var_dump($result);
echo '<br>'
?>

<?php //配列からデータの検索
$array = ['Taro', 'Jiro', 'Saburo'];
$index = array_search('Jiro', $array);
var_dump("インデックス番号は" . $index);
echo "<br>";
var_dump("検索したインデックス番号で取得した値は" . $array[$index]);
echo '<br>';
?>

<?php //配列　問1
$fruits = ['りんご','ぶどう','オレンジ','バナナ','みかん'];
var_dump($fruits[3]);
echo '<br>'
?>

<?php //配列　問2
$fruits = ['りんご', 'ぶどう', 'オレンジ', 'バナナ', 'みかん'];
$dropMikan = array_pop($fruits);
$new_fruits = array_merge($fruits, ['キウイ', 'マンゴー']);
var_dump($new_fruits);

$result = array_search('キウイ', $new_fruits);
echo '<br>';
var_dump('キウイのインデックス番号は'.$result);
echo '<br>'
?>

<?php //連想配列
$object = [
  'fish' => '魚',
  'vegetable' => '野菜',
  'meat' => 'お肉',
  'fruits' => '果実',
];
//連想配列の変数名['追加したキー名']=追加したい値
$object['rice'] = '米';
//unset(連想配列名['削除したいキー名'])
unset($object['fish']);

var_dump($object['meat']);
echo '<br>'
?>

<?php //繰り返しfor文
$array = array('Taro', 'Jiro', 'Saburo');

for ($i = 0; $i < count($array); $i++) {
  echo $array[$i] . '<br />';
}
?>

<?php //while文
$count = 0;
while ($count <= 10) {
    echo '<br />';
    echo $count;
    $count++;
    echo "<br>";
}
?>

<?php
$animals = [
	"高橋" => "犬",
	"内山" => "猫",
	"田中" => "うさぎ"
];foreach($animals as $name => $animal) {
  echo $name."さんが好きな動物は".$animal."です";
  echo "<br>";
}

<table>
<?php
for($a = 1; $a <= 9; $a++) {
  echo '<tr>';
  for($b = 1; $b <= 9; $b++) {
    echo '<td>'.$a*$b.'</td>';
  }
  echo '</tr>';
}
?>
</table>
</body>

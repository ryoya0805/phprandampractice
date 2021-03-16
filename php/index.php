

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>〇娘ソシャゲガチャシュミレーター</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <h1><?php


//キャラ一覧
$ssrchara = array(
    "☆3ミホノブルボン",
    "☆3テイエムオペラオー",
    "☆3スペシャルウィーク",
    "☆3サイレンスズカ",
    "☆3トウカイテイオー",
    "☆3マルゼンスキー",
    "☆3オグリキャップ",
    "☆3タイキシャトル",
    "☆3メジロマックイーン",
    "☆3シンボリルドルフ",
    "☆3ライスシャワー",

);

$srchara = array(
    "☆2ゴールドシップ",
    "☆2ウォッカ",
    "☆2ダイワスカーレット",
    "☆2グラスワンダー",
    "☆2エルコンドルバザー",
    "☆2エアグルーヴ",
    "☆2マヤノトップガン",
    "☆2スーパークリーク",

);

$rchara = array(
    "☆1メジロライアン",
    "☆1アグネスタキオン",
    "☆1ウィニングチケット",
    "☆1サクラバクシンオー",
    "☆1ハルウララ",
    "☆1マチカネフクキタル",
    "☆1ナイスネイチャ",
    "☆1キングヘイロー",

);
echo "某競馬アプリ";

echo "<br>";

echo "10連ガチャシュミレーター";
for($i = 1; $i<=10; $i++){
echo "<p>".$i."回目:";

    
$data = rand(1,100);

//↓↓↓↓どの数字に入っているか確認用↓↓↓
// echo  $data;


//SSR3%
//SR18%
//R79%

//ピックアップ排出天井は考えない物とする。

if($data <= 3){
    echo "SSR";

 $ssr = array_rand ($ssrchara);
 echo $ssrchara[$ssr];

}

elseif($data <= 18){
 echo "SR";   
 $sr = array_rand($srchara);
 echo $srchara[$sr];
}

elseif($data <= 100){
 echo "R";
$r = array_rand($rchara);
echo $rchara[$r];

}
echo "</p>";

}

?>
</h1>
</div>




    
<!-- <h1>じゃんけん</h1>

<p><div id=btn1><button>ぐー</button></div></p>

<div id=btn2><button>ちょき</button></div>
<div id=btn3><button>ぱー</button></div> -->


<!-- <input type="button" name = "goobtn" > -->








</body>
</html>

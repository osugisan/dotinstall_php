nl2br(h($message));
入力された、改行を表示させる関数

チェックボックス
<form action="result.php" method="get">
  <label><input type="checkbox" name="colors[]" value="orange"> Orange</label>
  <label><input type="checkbox" name="colors[]" value="pink"> Pink</label>
  <label><input type="checkbox" name="colors[]" value="gold"> Gold</label>
  <button>Send</button>
</form>


・null合体演算子
<?=
nullだったら条件文
$color = isset($color) ? $color : 'None selected';

null合体演算子
$color = $color ?? 'None selected';

$color = filter_input(INPUT_GET, 'color') ?? 'None selected';
?>


・クッキーの確認
デベロッパーツールの Application から確認できる


・クッキーの削除から、リダイレクト

空文字のセットで削除
setcookie('color', '');

header関数を使ってリダイレクトできる
header('Location: http://localhost:8080/index.php');


・セッションの使い方
１．セッションの定義
session_start();

2.セッション情報の格納
$_SESSION['color'] = $colorFromGet;

３．セッションの使用
$_SESSION['color']

４．セッションの削除
unset($_SESSION['color']);


・テキストファイルの読み込み
配列で取得する
$messages = file($filename, FILE_IGNORE_NEW_LINES);


・POST以外でアクセスした場合、弾く

<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // 処理
} else {
  // リクエスト先で、'Invalid Request'を表示
  exit('Invalid Request');
}
?>


・二重投稿の防止
処理コードと、結果表示のページをわける

<!-- 空文字にすると、現在のページに送信 -->
<form action=""></form>

<!-- リダイレクトと exit はセットで使う -->
<?php
header('Location: http://localhost:8080/result.php');
exit;
?>


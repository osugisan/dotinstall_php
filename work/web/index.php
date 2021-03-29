<?php
require('../app/functions.php');

$name = 'Taro <script>alert(1);</script>';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <!-- 最終的にHTMLに表示する時は、htmlspecialchars()設定 -->
  <p>Hello, <?= h($name) ?>!</p>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>でーたーべーす</title>
</head>
<body>
<?php
// 読み込みモードでファイルを開く
$fp = fopen("DATABASE.txt", "r");
 
// ファイルを1行ずつ取得する
while ($line = fgets($fp)) {
  echo "$line<br>";
}
 
// ファイルを閉じる
fclose($fp);
?>
</body>
</html>
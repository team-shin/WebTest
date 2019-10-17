<!DOCTYPE html>
<html lang="ja">
<head>
  <title>でーたーべーす</title>
</head>
<body>
<?php
$row = 1;
// ファイルが存在しているかチェックする
if (($handle = fopen("Dcsv.csv", "r")) !== FALSE) {
    // 1行ずつfgetcsv()関数を使って読み込む
    while (($data = fgetcsv($handle))) {
        $row++;
        foreach ($data as $value) {
            echo "「${value}」";
        }
        echo "<br>" ;
    }
    fclose($handle);
}
?>
</body>
</html>
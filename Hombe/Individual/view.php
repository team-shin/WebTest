<!DOCTYPE html>
<html lang="ja">
<head>
  <title>�Ł[���[�ׁ[��</title>
</head>
<body>
<?php
// �ǂݍ��݃��[�h�Ńt�@�C�����J��
$fp = fopen("DATABASE.txt", "r");
 
// �t�@�C����1�s���擾����
while ($line = fgets($fp)) {
  echo "$line<br>";
}
 
// �t�@�C�������
fclose($fp);
?>
</body>
</html>
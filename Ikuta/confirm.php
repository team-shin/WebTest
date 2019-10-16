<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div class="form-confirm">
<h1>入力内容確認</h1>
  <div class="name-confirm">
    <h3>名前</h3>
    <?php echo $_POST["name"]; ?>
  </div>
  <div class="email-confirm">
    <h3>メールアドレス</h3>
    <?php echo $_POST["email"]; ?>
  </div>
  <div class="tel-confirm">
    <h3>電話番号</h3>
    <?php echo $_POST["tel"]; ?>
  </div>
  <div class="message-confirm">
    <h3>メッセージ</h3>
    <?php echo $_POST["message"]; ?>
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>かくにんぺーじ</title>
</head>
<body>
    <?php
    $pData = array(
        "ID" => $_POST["id"] ,
        "Password" => $_POST["password"] ,
        "Myo" => $_POST["Myo"] ,
        "Na" => $_POST["Na"] ,
        "Pref" => $_POST["Pref"] ,
        "City" => $_POST["City"] ,
        "Age" => $_POST["Age"] ,
        "Birth" => $_POST["birth"] ,
        "Sexal" => $_POST["sexal"]
    )
    ?>

    
        <?php
         
        // 追記モード
        $fp = fopen("fputcsv.csv", "a");
         
        // CSV形式で書き込む
        fwrite($fp, $pData);
         
        // ファイルを閉じる
        fclose($fp);
         
        ?>


    <div class="form-confirm">
        <h1>あなたのID</h1>
        <div class="name-confirm">
            <h3>Your ID</h3>
            <?php echo $_POST["id"]; ?>
        </div>
        <div>
            <h3>Password</h3>
            <h2>********</h2>
        </div>
        <div>
            <h3>相手の名前</h3>
            <?php echo $_POST["Myo"]; ?>
            <?php echo $_POST["Na"]; ?>
        </div>
        <div>
            <h3>相手の住所</h3>
            <?php echo $_POST["Pref"]."県".$_POST["City"]; ?>
        </div>
        <div>
            <h3>相手の年齢</h3>
            <?php echo $_POST["Age"]."歳".$_POST["birth"]; ?>
        </div>
        <div>
            <h3>相手の性別</h3>
            <?php echo $_POST["sexal"]; ?>
        </div>

        <div class="Cwrite">
            <p>こちらの内容で書き込みました。</p>
            <?php print_r($pData) ?>
            <p><a href="../HombeTest1.html">Hombeトップへ</a></p>
        </div>

    </div>
</body>
</html>
<?php require_once("data.php"); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style3.css">
  <Script src="hogehoge.js"></Script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
  <?php $i =0; $j = 0;?>
  <div class = "hobby-form">
    <?php foreach($hobbies as $hobby) : ?>
      <div class="<?php echo $hobby?> n<?php echo $i % 9;?>" id="hobby">
        <p><?php echo $hobby?></p>
        <script>drag('<?php echo $hobby?>')</script>
        <script>randomPosition('<?php echo $hobby?>',$(".hobby-form").offset().top,$(".hobby-form").offset().left)</script>
        </div>
      </div>
      <?php $i++;?>
    <?php endforeach ?>
    </div>
  </div>
</body>
</html>
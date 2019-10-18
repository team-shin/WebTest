<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style2.css">
	<title>生田のテストページ</title>
	<Script src="main.js"></Script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
	<div class="ikuta_page">
		<div class="main">
		<div class="about">
			<h1>About</h1>
			<p>WEB作成練習用の生田のページです</p>
		</div>
		<div class="form">
			<div class="form_header">
				<h2>書き込みForm</h2>
				<p>書き込んでみて</p>
			</div>
			<div class="form_body">
			<!--action属性でinput時の送信先を、onsubmit属性でsubmitの条件付け-->
			<form action="http://masacccch.php.xdomain.jp/confirm.php" name="f" onsubmit="return selcheck()" method="POST">
					<dl>
						<dt>
							<span class="required">名前</span>
						</dt>
						<div class="name-form">
							<dd>
								<input type="text" name="name" class="name" required>
							</dd>
						</div>
						<dt>
							<span class="required">メールアドレス</span>
						</dt>
						<dd>
							<input type="email" name="email" class="email" required>
						</dd>
						<dt>電話番号</dt>
						<dd><input type="tel" name="tel" class="tel"></dd>
						<dt>
							<span class="required">1+1=?</span>
						</dt>
						<dd>
							<!--checked="checkedを忘れないようにする"-->
							<input type="radio" name="calc" value="two" checked="checked">2
							<input type="radio" name="calc" value="three">3
						</dd>
						<dt>メッセージ</dt>
						<dd>
							<textarea name="message" id="message" cols="30" rows="10"></textarea>
						</dd>
						<dt>
							<span class="required">このページどう?</span>
						</dt>
						<dd>
							<select name="type" class="type" id="type">
								<option value="select">選択してください</option>
								<option value="最高!">最高!</option>
								<option value="普通">普通</option>
								<option value="いまいち">いまいち</option>
							</select>
						</dd>
					</dl>
					<input type="submit">
				</form>
			</div>
			<div class="attention">
				<p>※「<span class="required"></span>」のついている項目は必須項目です。</p>
			</div>
			<div class="clearfix"></div>
		</div><!--form-->
		<div class="back">
			<a href="../index.html">トップに戻る</a>
		</div><!--back-->
		<div class="toTest2">
			<a href="ikutaTest2.php">test2へ</a>
		</div>
		<div class="drag">
				<p>ドラッグしてください</p>
		</div>
		<div class="drop_area">
			<p>ドロップエリア</p>
		</div>
		</div>
		<div class="twitter">
				<a class="twitter-timeline" href="https://twitter.com/NikuKyabe?ref_src=twsrc%5Etfw">Tweets by NikuKyabe</a> 
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="hobby-form">
			<div class="hobby-drop_area">
				
			</div>
			<?php $hobbys = array("ゲーム","釣り");?>
			<div class="hobby-list">
				<?php foreach($hobbys as $hobby) : ?>
					<div class="hobby">
						<p><?php echo $hobby?></p>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div><!--ikuta_page-->

	,<!--JQuery-->
	<script>
		$(function(){
			$('.drag').draggable();
			$(".hobby").draggable();
			$('.drop_area').droppable({
      activate: function(e,ui) {
        $(this)
          .find("p")
          .html("ドラッグが開始されました");
      },
      over: function(e,ui) {
        $(this)
          .css('background', '#e0ffff')
          .css('border', '2px solid #00bfff')
          .find("p")
          .html("ドロップエリアに入りました" );
      },
      out: function(e,ui) {
        $(this)
          .css('background', '#ffffe0')
          .css('border', '2px solid #ffff00')
          .find("p")
          .html("ドロップエリアから外れました");
      },
      drop: function(e,ui) {
        $(this)
          .addClass("ui-state-highlight")
          .css('background', '#fdf5e6')
          .css('border', '2px solid #ffa07a')
          .find("p")
          .html( "ドロップされました" );
      }
		});
			// $(".name-form").droppable({
			// 	out: function(e,ui){
			// 		$(".drag")
			// 			.css("height","80px")
			// 			.css("width","80px");
			// 		$(this)
			// 			.find("p");
			// 	},
			// 	over: function(e,ui){
			// 		$(".drag")
			// 			.css("height","50px")
			// 			.css("width","200px");
			// 		$(this)
			// 			.find("p");
			// 	}
			// });
		});
	</script>
</body>
</html>
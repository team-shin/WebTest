<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style2.css">
	<title>生田のテストページ</title>
	<Script src="main.js"></Script>
</head>
<body>
	<div class="ikuta_page">
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
			<form action="" name="f" onsubmit="return selcheck()" method="POST">
					<dl>
						<dt>
							<span class="required">
								名前
							</span>
						</dt>
						<dd>
							<input type="text" name="name" class="name" required>
						</dd>
						<dt>
							<span class="required">
								メールアドレス
							</span>
						</dt>
						<dd>
							<input type="email" name="email" class="email" required>
						</dd>
						<dt>
							電話番号
						</dt>
						<dd>
							<input type="tel" name="tel" class="tel">
						</dd>
						<dt>
							<span class="required">
								1+1=?
							</span>
						</dt>
						<dd>
							<!--checked="checkedを忘れないようにする"-->
							<input type="radio" name="calc" value="two" checked="checked">2
							<input type="radio" name="calc" value="three">3
						</dd>
						<dt>
							メッセージ
						</dt>
						<dd>
							<textarea name="message" id="message" cols="30" rows="10"></textarea>
						</dd>
						<dt>
							<span class="required">
									このページどう?
							</span>
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
				<p>
					※「<span class="required"></span>」のついている項目は必須項目です。
				</p>
			</div>
		</div><!--form-->
		<a class="twitter-timeline" href="https://twitter.com/NikuKyabe?ref_src=twsrc%5Etfw">Tweets by NikuKyabe</a> 
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div class="back">
			<a href="../index.html">トップに戻る</a>
		</div><!--back-->
	</div><!--ikuta_page-->
</body>
</html>
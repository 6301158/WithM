<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>U-moa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="松山とお食事に行きたい時押して下さい。もし暇山であれば松山がダッシュであなたの元へ向かいます。">
		<meta name="author" content="Satoshi Matsuyama">
		<meta property="og:image" content="http://u-moa.info/images/webclip.png" />
		<meta http-equiv="refresh" content="0.3;url=http://user.u-moa.info/max/public_html/withM/next.html" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../css/prettify.css" rel="stylesheet">
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-146052-10']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body data-spy="scroll" data-target=".bs-docs-sidebar">
		<!-- Navbar================================================== -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="http://u-moa.info/">U-moa</a>
					<ul class="nav">
						<li>
							<a href="https://www.facebook.com/Matsuyama.Satoshi?ref=tn_tnmn">全てを"もっと"面白く</a>
						</li>
					</ul>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="">
								<a href="https://www.facebook.com/Umoa.fan"><i class="icon-thumbs-up icon-white"></i> Facebook</a>
							</li>
							<li class="">
								<a href="http://www.youtube.com/user/UmoaTV"><i class="icon-play-circle icon-white"></i> YouTube</a>
							</li>
							<li class="">
								<a href="https://twitter.com/U_moas"><i class="icon-pencil icon-white"></i> Twitter</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--ボタンの設定------------------------------------------------------------->
			<div style="text-align:center">
				<img src="../images/loading.gif" style="padding-top: 150px" />
				<p>
					loading
				</p>
			</div>
		</div>
		<!--PHPの設定------------------------------------------------------------->
		<div class="php" style="padding-top: 1000px">
			<?php
			require_once ('../twitteroauth/twitteroauth.php');
			require_once ('config.php');
			$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
			$data1 = $_POST['data1'];
			$params = array('status' => "@1901137  @{$data1} から依頼来ているぞ");
			$result = $conn -> OAuthRequest("http://api.twitter.com/1.1/statuses/update.json", "POST", array("status" => $params));
			var_dump($result);
			?>
		</div>
	</body>
</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
<!--    there's no need to type "public" cause asset locates the public folder-->
    <link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>"type="text/css">
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework"><img src="https://lastfm-img2.akamaized.net/i/u/300x300/e310d65b68944625b54bbc44ed1e6b3e.png" alt="Laravel PHP Framework"></a>
		<h1 class="highlight">Can you save my HeavyDirtySoul?</h1>
	</div>
</body>
</html>
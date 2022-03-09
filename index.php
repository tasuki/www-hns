<?php
$background = 'CCC';
$text = '222';

$font = 'Alegreya Sans';
$weights = array(
	'body'     => '400',
	'category' => '900',
	'title'    => '900',
	'italic'   => '400italic',
	'welcome'  => '300',
);

?><!DOCTYPE html>
<html>
<head>
	<title>tasuki @ handshake</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Tasuki is a diagonal fuseki (opening) in the game of go. It leads to fierce games full of fighting." />
	<link href="//fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', $font); ?>:<?php echo join(',', array_unique($weights)) ?>&amp;subset=latin-ext" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
	<style type="text/css">
		/* layout */
		html, button, input, select, textarea, .pure-g [class *= "pure-u"] { font-family: "<?php echo $font ?>", sans-serif; letter-spacing: 0; }
		body { background-color: #<?php echo $background ?>; color: #<?php echo $text ?>; font-weight: <?php echo $weights['body'] ?>; font-size: 1.2em; line-height: 1.3; }
		.header { background-color: #<?php echo $text ?>; color: #<?php echo $background ?>; text-shadow: .05em .05em #000; padding: 0 .5em; }
		.content { padding: .5em; }

		/* common */
		a:link, a:visited { color: #<?php echo $text ?>; }
		a:hover { text-decoration: none; }
		a strong { font-weight: <?php echo $weights['category'] ?>; }

		/* grid */
		.pure-g { max-width: 40em; margin: auto; }
		.item { text-align: right; }

		@media screen and (max-width: 55em) {
			.pure-g { display: block; }
			.item { text-align: left; }
			.pure-g div { display: inline; }
		}

		/* header */
		h1, h4 { margin: 0; }
		h4 { font-weight: <?php echo $weights['welcome'] ?>; letter-spacing: -0.03em; padding-top: 2em; position: relative; left: .9em; top: .5em; }
		@media screen and (max-width: 55em) { h4 { padding-top: .5em; } }
		h1 { font-size: 3em; font-weight: <?php echo $weights['title'] ?>; line-height: .7em; }
		h1 .handshake { font-size: .45em; position: relative; }

		/* content */
		.notice { font-style: italic; margin-bottom: 1em; }
		.item::after { content: "–"; padding: 0 .5em; }
		.category { font-weight: <?php echo $weights['category'] ?>; margin-top: 1em; padding: 0px; }

		/* transitions */
		body, .header, a:link { transition: all 5s linear; }
	</style>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript">
	//<![CDATA[
	$(document).ready(function() {
		function colorHex(color) {
			return color.toString(16).padStart(2, "0");
		}
		function reanimate() {
			low = 200, high = 255, dark = light = "#";
			for (i = 0; i < 3; i++) {
				color = Math.floor(Math.random() * (high - low));
				dark += colorHex(color);
				light += colorHex(color + low);
			}

			$(".header").css("backgroundColor", dark);
			$("body").css("backgroundColor", light);
			$(".header").css("color", light);
			$("body").css("color", dark);
			$("a").css("color", dark);
		}

		reanimate();
		setInterval(reanimate, 5000);
	});
	//]]>
	</script>
</head>
<body>

<div class="header">
	<div class="pure-g">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			<h4>Welcome to</h4>
			<h1>tasuki<span class="handshake">@handshake</span></h1>
		</div>
	</div>
</div>

<div class="content">
	<div class="pure-g notice">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			If it appears the colours are changing, please restart your display device.<br />
			This is a known bug and will be fixed next week.
		</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">
			Hi, I'm Vít from the Czech Republic, my go-playing friends sometimes call me tasuki.
			You've found my home on Handshake. On normie internet I'm on <a href="https://tasuki.org">tasuki.org</a>.
			All the cool kids are on Handskahe, can't stay behind.
		</div>
	</div>


	<div class="pure-g category">
		<div class="pure-u-md-1-4"></div>
		<div class="pure-u-md-3-4">Useful/interesting stuff on tasuki/</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="http://domains.tasuki/">Domains</a></div></div>
		<div class="pure-u-md-3-4">They're for sale!</div>
	</div>
	<div class="pure-g">
		<div class="pure-u-md-1-4"><div class="item"><a href="http://sniper.tasuki/">Sniper</a></div></div>
		<div class="pure-u-md-3-4">Keep an eye on Handshake auctions!</div>
	</div>
</body>
</html>

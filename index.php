<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wedding of Boris & Beta</title>
	<meta name="description" content="Scroll animations for image grids powered by Locomotive Scroll">
	<meta name="keywords" content="locomotive scroll, scroll animation, website, javascript, demo">
	<meta name="author" content="Codrops">
	<link rel="shortcut icon" href="favicon.26242483.ico">
	<link rel="stylesheet" href="https://use.typekit.net/rmd7deq.css">
	<link rel="stylesheet" type="text/css" href="base.98fd6c19.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>

	<script>
		document.documentElement.className = "js";

		var supportsCssVars = function supportsCssVars() {
			var e,
				t = document.createElement("style");
			return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window
				.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
		};

		supportsCssVars() || alert("Please view this website in a modern browser that supports CSS Variables.");
	</script>
</head>

<body class="demo-2 loading">
	<div class="nav">
		<input type="checkbox" id="nav-check">
		<div class="nav-header">
			<div class="nav-title">
				GAGA&BETA
			</div>
		</div>
		<div class="nav-btn">
			<label for="nav-check">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>

		<div class="nav-links">
			<a href="boriskaraia.com" target="_blank">Главная Страница</a>
			<a href="boriskaraia.com/guide.php" target="_blank">Гайд</a>
		</div>
	</div>
	<main data-scroll-container="">
		<section id="header" class="content content--fixed">
		</section>
		<section class="tiles tiles--columns-rotated tiles--darker" id="grid">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid">
					<div class="tiles__line-img" style="background-image:url(1-min.4288a5ab.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(2-min.8df2b48a.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(3-min.6eb2ae3b.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(4-min.00a4d3b5.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(5-min.9b7e000b.jpg)"></div>
				</div>
				<div class="tiles__line" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid">
					<div class="tiles__line-img" style="background-image:url(5-min.9b7e000b.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(6-min.c589022c.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(7-min.f89c86ad.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(8-min.0f72d51c.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(9-min.d9ab333b.jpg)"></div>
				</div>
				<div class="tiles__line" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid">
					<div class="tiles__line-img" style="background-image:url(9-min.d9ab333b.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(10-min.5fb6b038.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(11-min.7ba439f9.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(12-min.00720ac3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(13-min.e307c906.jpg)"></div>
				</div>
				<div class="tiles__line" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid">
					<div class="tiles__line-img" style="background-image:url(13-min.e307c906.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(14-min.cdeefaff.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(15-min.7db16fac.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(16-min.572b4bb6.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(17-min.984c6c06.jpg)"></div>
				</div>
				<div class="tiles__line" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid">
					<div class="tiles__line-img" style="background-image:url(17-min.984c6c06.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(18-min.a81df4bc.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(19-min.2454ad87.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(20-min.2c18eeb7.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(1-min.4288a5ab.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title">Приглашение</h2>
		</section>
		<section class="content">
			<p class="content__text content__text--centered" style="margin-bottom: 0px;" data-scroll=""
				data-scroll-speed="4">Будем рады видеть вас на нашей свадьбе <strong>28.08.2022</strong><br>г. Зугдиди,
				Грузия<br>С вас хорошее настроение, с нас нескончаемые потоки вина!</p><br>
			<div class="content__text content__text--centered" style="margin-top: 0px ;" data-scroll=""
				data-scroll-speed="4">
				<form action="mail_handler.php" method="post">
					Для подтверждения своего участия впишите свое имя: <input type="text" name="first_name"><br>
					<input type="submit" name="submit" value="Подтвердить">
				</form>
			</div>
		</section>
		<section class="content content--feature">
			<p class="content__breakout content__breakout--big" data-scroll="" data-scroll-speed="1"
				data-scroll-direction="horizontal">Love is life. And if you miss love, you miss life.</p>
			<p class="content__breakout content__breakout--medium" data-scroll="" data-scroll-speed="2"
				data-scroll-direction="horizontal">I would rather share one lifetime with you than face all the ages of
				this world alone.</p>
		</section>
		<!-- <section class="tiles tiles--small" id="grid2">
			<div class="tiles__wrap"></div>
			<div class="tiles__line">
				<div id="myImg1" class="tiles__line-img" style="background-image:url(10.e7aba2b1.jpg)" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid2"></div>
				<div id="myImg2" class="tiles__line-img" style="background-image:url(20.5528d5b7.jpg)" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid2"></div>
				<div id="myImg3" class="tiles__line-img" style="background-image:url(3.ecfa820e.jpg)" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid2"></div>
				<div id="myImg4" class="tiles__line-img" style="background-image:url(4.8ed29d64.jpg)" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid2"></div>
				<div id="myImg5" class="tiles__line-img" style="background-image:url(19.8091b01d.jpg)" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid2"></div>
				<div id="myImg6" class="tiles__line-img" style="background-image:url(11.e75a941d.jpg)" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid2"></div>
				<div id="myImg7" class="tiles__line-img" style="background-image:url(18.c5d0ab34.jpg)" data-scroll="" data-scroll-speed="1" data-scroll-target="#grid2"></div>
				<div id="myImg8" class="tiles__line-img" style="background-image:url(16.a7efd02b.jpg)" data-scroll="" data-scroll-speed="-1" data-scroll-target="#grid2"></div>
			</div>

		</section> -->
		<!-- The Modal -->
		<!-- <section class="content" style="min-height: 50vh;padding: 1rem;">
			<div id="myModal" class="modal">
				<img class="modal-content" id="img01">
				<img class="modal-content" id="img02">
				<img class="modal-content" id="img03">
				<img class="modal-content" id="img04">
				<img class="modal-content" id="img05">
				<img class="modal-content" id="img06">
				<img class="modal-content" id="img07">
				<img class="modal-content" id="img08">
			</div>
		</section> -->
		<section class="content">
			<a class="backtop" data-scroll="" data-scroll-speed="4">Вернуться наверх</a>
			<div class="frame frame--footer">
			</div>
		</section>
	</main>
	<script src="js.00a46daa.js"></script>
</body>

</html>
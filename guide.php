<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Tiles Scroll Animation | Demo 1 | Codrops</title>
	<meta name="description" content="Scroll animations for image grids powered by Locomotive Scroll">
	<meta name="keywords" content="locomotive scroll, scroll animation, website, javascript, demo">
	<meta name="author" content="Codrops">
	<link rel="shortcut icon" href="favicon.26242483.ico">
	<link rel="stylesheet" href="lightbox.min.css">
	<link rel="stylesheet" href="https://use.typekit.net/rmd7deq.css">
	<link rel="stylesheet" type="text/css" href="base.98fd6c19.css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
	<script>
		document.documentElement.className = "js";

		var supportsCssVars = function supportsCssVars() {
			var e,
				t = document.createElement("style");
			return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window
				.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
		};

		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>
	<style>
		.content__text {
			max-width: 80vw;
			align-self: center;
			width: 80vw;
		}
	</style>
</head>

<body class="demo-1 loading">
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
			<a href="https://boriskaraia.com/" target="_blank">Главная Страница</a>
			<a href="https://boriskaraia.com/guide.php" target="_blank">Гайд</a>
		</div>
	</div>
	<main data-scroll-container="">
		<section id="header" class="content" style="min-height: 35vh;">
			<p class="content__pretitle" style="color: #ffffff00;"></p>
			<h1 class="content__title" data-scroll="" data-scroll-speed="2">Гайд по Грузии</h1>
		</section>
		<section class="tiles tiles--oneline" id="grid2">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="2" data-scroll-target="#grid2"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/zug4.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/zug2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/zug3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/zug1.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--right tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Зугдиди</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Так как мероприятие будет проходить в г.
				<strong><em>Зугдиди</em></strong>, начнем повествование именно с него.<br><br>
				<strong><em>Зугдиди</em></strong> – это не только родной город Гагочки, но и столица региона Самегрело.
				Здесь расположен дворец
				мегрельских князей Дадиани, древнего рода, имевшего родственные связи с Наполеоном. Поэтому здесь и
				хранится одна из посмертных масок Бонапарта. А также большая коллекция реликвии Дадиани и исторических
				грузинских ценностей. А вокруг сада раскинулся красивущий ботанический сад.
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/zug1.jpg" data-lightbox="zugdidi-set" data-title="Старый город.">
						<img class="example-image" src="images/zug1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/zug2.jpg" data-lightbox="zugdidi-set" data-title="">
						<img class="example-image" src="images/zug2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/zug3-b.jpeg" data-lightbox="zugdidi-set" data-title="">
						<img class="example-image" src="images/zug3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/zug4.jpg" data-lightbox="zugdidi-set" data-title="">
						<img class="example-image" src="images/zug4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid3">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="-2" data-scroll-target="#grid3"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/tbi1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/tbi2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/tbi3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/tbi4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--left tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Тбилиси</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Так как большинство приезжает в Грузию
				впервые, начнем знакомство со столицы Грузии Тбилиси.
				Здесь обязательна к посещению древняя столица Мцхета и монастырь Джвари (тот самый, о котором Лермонтов
				писал:<br>
				<span><em><br>«Немного лет тому назад,<br>
						Там, где, сливаяся, шумят,<br>
						Обнявшись, будто две сестры,<br>
						Струи Арагвы и Куры,<br>
						Был монастырь…»<br></em></span><br>
				Если хочется больше потрясных видов на город, то следует подняться на гору Мтацминда, это можно сделать
				как пешком, так и на машине, а что еще круче – на фуникулёре. (<a href="https://www.google.com/maps/place/Tbilisi+Funicular/@41.6951096,44.7892493,15z/data=!4m5!3m4!1s0x0:0xdd5ffe417e42ef78!8m2!3d41.6951096!4d44.7892493">Адрес</a>)
				Оттуда можно продолжить поэтический маршрут и спуститься к Пантеону. Первым и самым знаменитым
				захоронением стала могила Грибоедова и его жены Нины Чавчавадзе.
				Надгробие поэта венчает памятник в виде плачущей вдовы, а на могильной плите выгравирована надпись: «Ум
				и дела твои бессмертны в памяти русской, но для чего пережила тебя любовь моя?» Подробнее историю вечной
				любви можно прочитать здесь (ссылка на сайт из гугл)))
				А ниже будут интересные места с фото и адресами, Тбилиси – город для пеших прогулок. Стройте маршрут и
				вперёд!
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/tbi1.jpg" data-lightbox="example-set"
						data-title=""><img class="example-image" src="images/tbi1-sm.jpg"
							alt=""></a>
					<a class="example-image-link" href="images/tbi2.jpg" data-lightbox="example-set"
						data-title=""><img class="example-image"
							src="images/tbi2-sm.jpg" alt=""></a>
					<a class="example-image-link" href="images/tbi3.jpg" data-lightbox="example-set"
						data-title=""><img
							class="example-image" src="images/tbi3-sm.jpg" alt=""></a>
					<a class="example-image-link" href="images/tbi4.jpg" data-lightbox="example-set"
						data-title=""><img
							class="example-image" src="images/tbi4-sm.jpg"
							alt=""></a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid4">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="2" data-scroll-target="#grid4"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/kut1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/kut2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/kut3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/kut4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--right tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Кутаиси</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Продолжим дальше поэтический маршрут? Тогда
				следующий по величине город Грузии – Кутаиси. Здесь
				родился Маяковский, здесь же располагается дом-музей поэта, где он родился и провел первые годы
				жизни. Позже он переедет в Москву, а по приезду в Грузию напишет:<br><span><em><br>«Только нога ступила
						в Кавказ, Я
						вспомнил, что я — грузин.»<br></em></span><br> (ссылка, фото) <br><br>а знаете ли вы, что
				Владимир Владимирович свободно
				разговаривал на грузинском?
				Чтобы выучить базовые слова и фразы – жми сюда (ссылка на разговорник)
				Еще в Кутаиси невероятное количество значительных сооружений. Один из них, Кафедральный собор
				Баграти, примечательный тем, что был внесен в список объектов Всемирного наследия ЮНЕСКО в 1994 году
				и удален оттуда в 2017 году из-за проведенных ремонтных работ по восстановлению.
				Еще Гелати, Моцамета (ссылки, фото)
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/kut1-b.jpg" data-lightbox="kutaisi-set" data-title="">
						<img class="example-image" src="images/kut1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/kut2.jpg" data-lightbox="kutaisi-set" data-title="">
						<img class="example-image" src="images/kut2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/kut3.jpg" data-lightbox="kutaisi-set" data-title="">
						<img class="example-image" src="images/kut3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/kut4.jpg" data-lightbox="kutaisi-set" data-title="">
						<img class="example-image" src="images/kut4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid5">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="-2" data-scroll-target="#grid5"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/mart1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/mart2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/mart3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/mart4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--left tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Мартвили</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Если хочется кататься на лодке по лазурной
				воде – спешите в каньон Мартвили ( ссылка, адрес)
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/mart1.jpg" data-lightbox="martveli-set" data-title="">
						<img class="example-image" src="images/mart1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/mart2.jpg" data-lightbox="martveli-set" data-title="">
						<img class="example-image" src="images/mart2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/mart3.jpg" data-lightbox="martveli-set" data-title="">
						<img class="example-image" src="images/mart3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/mart4.jpg" data-lightbox="martveli-set" data-title="">
						<img class="example-image" src="images/mart4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid6">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="2" data-scroll-target="#grid6"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/bor1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bor2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bor3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bor4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--right tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Боржоми</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Хотите попробовать термальных источников?
				Езжайте в Боржоми или Саирме (ссылка -фото)
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/bor1.jpg" data-lightbox="borjomi-set" data-title="">
						<img class="example-image" src="images/bor1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bor2.jpg" data-lightbox="borjomi-set" data-title="">
						<img class="example-image" src="images/bor2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bor3.jpg" data-lightbox="borjomi-set" data-title="">
						<img class="example-image" src="images/bor3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bor4.jpg" data-lightbox="borjomi-set" data-title="">
						<img class="example-image" src="images/bor4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid7">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="-2" data-scroll-target="#grid7"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/sat1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/sat2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/sat3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/sat4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--left tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Сатаплиа</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Если интересно посмотреть древние отпечатки
				динозавров, отправляйтесь в заповедник Сатаплиа, там же есть необычайные пещеры со сталактитами и
				сталагмитами, освежиться в пещере, когда на улице +35 – идеально! (ссылка , фото)
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/sat1.jpg" data-lightbox="sataplia-set" data-title="">
						<img class="example-image" src="images/sat1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/sat2.jpg" data-lightbox="sataplia-set" data-title="">
						<img class="example-image" src="images/sat2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/sat3.jpg" data-lightbox="sataplia-set" data-title="">
						<img class="example-image" src="images/sat3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/sat4.jpg" data-lightbox="sataplia-set" data-title="">
						<img class="example-image" src="images/sat4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid8">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="2" data-scroll-target="#grid8"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/var1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/var2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/var3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/var4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--right tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Вардзиа и Уплисцихе</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Если древность таки совсем увлекла – то стоит
				посетить пещерные города Вардзии или Уплисцихе. (ссылка -фото)
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/var1.jpg" data-lightbox="vardzia-set" data-title="">
						<img class="example-image" src="images/var1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/var2.jpg" data-lightbox="vardzia-set" data-title="">
						<img class="example-image" src="images/var2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/var3.jpg" data-lightbox="vardzia-set" data-title="">
						<img class="example-image" src="images/var3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/var4.jpg" data-lightbox="vardzia-set" data-title="">
						<img class="example-image" src="images/var4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>
		<section class="tiles tiles--oneline" id="grid9">
			<div class="tiles__wrap">
				<div class="tiles__line" data-scroll="" data-scroll-speed="-2" data-scroll-target="#grid9"
					data-scroll-direction="horizontal">
					<div class="tiles__line-img" style="background-image:url(images/bat1.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bat2.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bat3.jpg)"></div>
					<div class="tiles__line-img" style="background-image:url(images/bat4.jpg)"></div>
				</div>
			</div>
			<h2 class="tiles__title tiles__title--left tiles__title--full tiles__title--alt" data-scroll=""
				data-scroll-speed="2">Батуми</h2>
		</section>
		<section class="content ">
			<p class="content__text" data-scroll="" data-scroll-speed="2">Если хочется к морю, то конечно же Батуми, он
				такой современный, грузинский Вегас, как называют его соседи-турки. Есть еще пляжные курорты Шекветили,
				Кобулети, Уреки (здесь магнитный черный песок) и много других. (фото, ссылки).
			</p>
			<div class="image-row">
				<div class="image-set">
					<a class="example-image-link" href="images/bat1.jpg" data-lightbox="batumi-set" data-title="">
						<img class="example-image" src="images/bat1-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bat2.jpg" data-lightbox="batumi-set" data-title="">
						<img class="example-image" src="images/bat2-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bat3.jpg" data-lightbox="batumi-set" data-title="">
						<img class="example-image" src="images/bat3-sm.jpg" alt="">
					</a>
					<a class="example-image-link" href="images/bat4.jpg" data-lightbox="batumi-set" data-title="">
						<img class="example-image" src="images/bat4-sm.jpg" alt="">
					</a>
				</div>
			</div>
		</section>


		<section class="content content--feature">
			<p class="content__breakout content__breakout--big" data-scroll="" data-scroll-speed="3"
				data-scroll-direction="horizontal">endless acceleration toward infinity</p>
			<p class="content__breakout content__breakout--medium" data-scroll="" data-scroll-speed="-1"
				data-scroll-direction="horizontal">the greatest barrier to your enlightenment</p>
		</section>
		<section class="content">
			<a class="backtop" data-scroll="" data-scroll-speed="4">Back to the top</a>
		</section>
	</main>
	<script src="js.00a46daa.js"></script>
	<script src="lightbox.min.js"></script>
	<script src="lightbox-plus-jquery.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':

					new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NZFTQSD');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47679308-80"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10905088908');
		gtag('config', 'UA-47679308-80');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10905088908"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10905088908');
	</script>

	<script async src="https://trkcall.com/scripts/94404.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZFTQSD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-6 col-md-auto">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>
					<div class="col-6 d-md-none"><?= renderImg("master-builders.png", "logo") ?></div>
					<div class="col-12 col-md-auto col-xl-7 pt-2 pt-md-0">
						<div class="row justify-content-center justify-content-lg-between no-gutters align-items-center">
							<div class="col-7 d-none d-lg-block">
								<?= renderImg("master-builders.png", "logo") ?>
							</div>
							<div class="col-6 d-md-none pr-1">
								<a href="#form" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 header-button">
									BOOK NOW
								</a>
							</div>
							<div class="col-6 col-md-auto pl-1 pl-md-0">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-primary rounded-0 text-black line-height-1 h9 fw-800 header-button">
									<?= $phone_number ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-xxl-5" data-aos="fade-right">
						<div class="hero-heading h1"><span>Your one<br> stop</span> for all your concrete jobs.</div>
						<div class="sub-heading h8">We specialise in concrete jobs for <span>Residential and rural properties!</span></div>
					</div>
				</div>
			</div>
			<?= renderImg("banner.png", "background", "d-none d-md-block d-xl-none") ?>
			<div class="banner-underlay" data-aos="fade-right">
				<div class="container">
					<div class="h4 fw-900 text-black">Get local jobs done by locals!</div>
					<div class="h14 fw-700 text-black">Quote within mins and job completion within days!</div>
				</div>
			</div>
		</div>
		<?= renderImg("banner-sm.png", "background", "d-md-none") ?>
	</header>
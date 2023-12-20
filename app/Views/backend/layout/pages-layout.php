<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Employee Managment System -EMS</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="<?php echo base_url(); ?>/backend/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="<?php echo base_url(); ?>/backend/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="<?php echo base_url(); ?>/backend/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="<?php echo base_url(); ?>/backend/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="<?php echo base_url(); ?>/backend/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
		/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/backend/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<?php include('inc/header.php') ?>
		<?php include('inc/right-sidebar.php') ?>
		<?php include('inc/left-side-bar.php') ?>
		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div> 
						<?= $this->renderSection('content') ?>
					</div>
				</div>
				<?php include('inc/footer.php') ?>
			</div>
		</div>	
		<!-- js -->
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/core.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/script.min.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/process.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/layout-settings.js"></script>
		<script src="<?php echo base_url(); ?>/backend/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>/backend/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
		<script src="<?php echo base_url(); ?>/backend/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
		<script src="<?php echo base_url(); ?>/backend/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="<?php echo base_url(); ?>/backend/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/dashboard2.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>

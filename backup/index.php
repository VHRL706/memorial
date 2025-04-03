<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Lens by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload-0 is-preload-1 is-preload-2">

	<!-- Main -->
	<div id="main">

		<!-- Header -->
		<header id="header">
			<h1>Lens</h1>
			<p>Just another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
			<ul class="icons">
				<li><a href="test.php" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul>
		</header>

		<!-- Thumbnail -->
		<section id="thumbnails">
			<!-- <article>
				<a class="thumbnail" href="images/01.jpg" data-position="left center"><img src="images/01.jpg" alt="" /></a>
				<h2>Diam tempus accumsan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>
			<article>
				<a class="thumbnail" href="images/02.jpg"><img src="images/02.jpg" alt="" /></a>
				<h2>Vivamus convallis libero</h2>
				<p>Sed velit lacus, laoreet at venenatis convallis in lorem tincidunt.</p>
			</article> -->

			<?php
			$dir = "images";
			$allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
			$files = scandir($dir);

			foreach ($files as $file) {
				$file_path = $dir . "/" . $file;
				$ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
				if (in_array($ext, $allowed_types)) {
					$imgName = htmlspecialchars(pathinfo($file, PATHINFO_FILENAME));
			?>
					<article>
						<a class="thumbnail" href="<?php echo $file_path; ?>" data-position="left center">
							<img src="<?php echo $file_path; ?>" alt="<?php echo $imgName; ?>" />
						</a>

						<!-- Remove if don't want image name at bottom -->
						<h2><?php echo $imgName; ?></h2>

						<p></p>
					</article>
			<?php
				}
			}
			?>

		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="copyright">
				<li>&copy; Untitled.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a>.</li>
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
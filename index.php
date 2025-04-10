<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Multiverse by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css?v=<?= filemtime('assets/css/main.css') ?>" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<h1><a href="index.html"><strong>Multiverse</strong> by HTML5 UP</a></h1>
			<nav>
				<ul>
					<li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main">
			<?php
			// --- IMAGES ---
			$images = glob("images/*.{jpg,JPG,jpeg,png,gif,HEIC}", GLOB_BRACE);

			foreach ($images as $img) {
				$filename = basename($img);

				echo '<article class="thumb">
            <a href="' . $img . '" class="image"><img src="' . $img . '" alt="" /></a>
            <h2>' . pathinfo($filename, PATHINFO_FILENAME) . '</h2>
            <p>Photo</p>
          </article>';
			}

			// --- VIDEOS ---
			$videos = glob("videos/*.{mp4,webm,ogg}", GLOB_BRACE);

			foreach ($videos as $video) {
				$filename = basename($video);
			
				echo '<article class="thumb">
						<video controls width="100%">
							<source src="'.$video.'" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<h2>'.pathinfo($filename, PATHINFO_FILENAME).'</h2>
						<p>Video</p>
					  </article>';
			}
			?>
		</div>

		<!-- Footer -->
		<footer id="footer" class="panel">
			<div class="inner split">
				<div>
					<section>
						<h2>Magna feugiat sed adipiscing</h2>
						<p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum
							eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu
							bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor
							tincidunt erat, et scelerisque turpis ipsum.</p>
					</section>
					<section>
						<h2>Follow me on ...</h2>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
							</li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
							</li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a>
							</li>
						</ul>
					</section>
					<p class="copyright">
						&copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
					</p>
				</div>
				<div>
					<section>
						<h2>Get in touch</h2>
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field half">
									<input type="text" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send" class="primary" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</form>
					</section>
				</div>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
<?php
header( "Cache-Control: no-store, no-cache, must-revalidate, max-age=0" );
header( "Cache-Control: post-check=0, pre-check=0", false );
header( "Pragma: no-cache" );


$stylesheetTimestamp = date( "YmdHis", filemtime( 'css/main.css' ) );
$jsTimestamp = date( "YmdHis", filemtime( 'js/jquery.main.js' ) );

$presentation_mode = ! empty( $_GET["presentation"] );


?><!doctype html>
<html lang="en">
<!--
/* O HAI!!!
oy:                                                            :yo
sNNNs:                                                      :sNNNs
sNNNNNms:                                                :smNNNNNs
sNNNNNNNNms-                                          -smNNNNNNNNs
sNNNNNNNNNNNmo-                                    -omNNNNNNNNNNNs
sNNNNNNNNNNNNNNdo.                              .odNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNd+.                        .+dNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNd+.                  .+dNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNh+`            `+hNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNh/`      `/hNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNy/``/yNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
sNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNs
+NNNNNN-...................yNNNNNNNNNNy...................-NNNNNN+
-NNNNNN+                   mNNNNNNNNNNm`                  +NNNNNN-
hNNNNNN:                 yNNNNNNNNNNNNy                 :NNNNNNh
`mNNNNNNs`             :dNNNNNNmmNNNNNNd:             `oNNNNNNm`
 `hNNNNNNNy/`       -+dNNNNNNNd`.dNNNNNNNd+-       `/yNNNNNNNh`
   +mNNNNNNNNNdhhddNNNNNNNNNN+    +NNNNNNNNNNmdhhdNNNNNNNNNm+
	`+dNNNNNNNNNNNNNNNNNNNd+`      `+dNNNNNNNNNNNNNNNNNNNd+`
	   .+ymNNNNNNNNNNNmh+.            .+hmNNNNNNNNNNNmy+.
		   `-:/+++/:-`                    `-:/+++/:-`



*/
-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>What Is It? ( WordCamp Montréal 2018 )</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<meta name="theme-color" content="#000000" />

	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css?v=<?php echo $stylesheetTimestamp; ?>">
</head>

<body>


<div class="reveal">
	<div class="slides">

		<?php if ( $presentation_mode ) { ?>
			<section class="pre-talk" data-background="images/breaking-news.png"></section>
		<?php } ?>

		<section class="cover center">
			<h1 class="main-title"><span class="title-part-1">What</span> <span class="title-part-2">Is It?</span></h1>
			<p class="michal">Michal Bluma</p>
		</section>


		<section class="impact">
			<h2>Our early decisions will dictate:</h2>
			<div class="split-2">
				<ul class="splitted">
					<li>Wireframes</li>
					<li>Designs</li>
					<li>Page templates</li>
				</ul>
				<ul class="splitted">
					<li>Back-end code</li>
					<li>Front-end code</li>
					<li>Content entry</li>
				</ul>
			</div>
		</section>


		<section class="dealing-with">
			<h2 class="raised"><span>What are we</span> <span>dealing with?</span></h2>

			<div class="word-list">
				<span>books</span>
				<span>shoes</span>
				<span>cupcakes</span>
				<span>staff</span>
				<span>venues</span>
				<span>cats</span>
				<span>staplers</span>
				<span>events</span>
				<span>hi Roy</span>
				<span>beer</span>
				<span>Gilmore Girls episodes</span>
				<span>vegan poutine</span>
				<span>sofas</span>
				<span>exotic fish</span>
				<span>drain pipes</span>
				<span>ebooks</span>
				<span>greek gods</span>
				<span>DC superheroes</span>
				<span>math problems</span>
				<span>yoga poses</span>
				<span>sports memorabilia</span>
				<span>barware</span>

			</div>
		</section>


		<section class="how">
			<h2>How will we</h2>
			<div class="split-2 fragment">
				<div class="splitted">Sort it?</div>
				<div class="splitted">Filter it?</div>
			</div>
		</section>

		<section class="slide-q-eh">
			<h2 class="tp-text raised">Q & eh?</h2>
			<h4 class="fade-me">Figuring out the properties</h4>

			<div class="word-list">
				<span>number of pages?</span>
				<span>ISBN?</span>
				<span>author?</span>
				<span>difficulty?</span>
				<span>has been exorcised?</span>
				<span>hot / cold?</span>
				<span>level of fluffiness?</span>
				<span>vegan?</span>
				<span>available?</span>
				<span>colour?</span>
				<span>number of tentacles?</span>
				<span>child-proof?</span>
				<span>dimensions?</span>
				<span>gluten-free?</span>
				<span>weight?</span>
				<span>dishwasher-safe?</span>
				<span>multiplayer?</span>
				<span>declawed?</span>
				<span>BTUs?</span>
				<span>episode number?</span>
				<span>?</span>

			</div>
		</section>

		<section class="book" data-background="images/photo-1468779036391-52341f60b55d.jpg">
			<div class="split-2">
				<div class="splitted">
					<p>An example:</p>
					<h2>a book</h2>

					<div class="photo-credit">Photo by
						<a href="https://unsplash.com/photos/XN4T2PVUUgk?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Beatriz Pérez Moya</a>
						on
						<a href="https://unsplash.com/photos/XN4T2PVUUgk">Unsplash</a>
					</div>
				</div>
			</div>
		</section>

		<section class="think">
			<h2>Think about <br> EVERYTHING!</h2>
		</section>


	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write( '<script src="vendors/jquery-3.3.1.min.js"><\/script>' )</script>

<script src="vendors/reveal.js/js/reveal.js"></script>
<script src="js/jquery.main.min.js?v=<?php echo $jsTimestamp; ?>"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
	window.ga = function () {
		ga.q.push( arguments )
	};
	ga.q = [];
	ga.l = +new Date;
	ga( 'create', 'UA-37578947-6', 'auto' );
	ga( 'send', 'pageview' )
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>

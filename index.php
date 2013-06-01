<?php
date_default_timezone_set('America/New_York');
if (isset($_GET['e'])){
	$n=$_GET['e'];
	$eTitle="Error ".$n.": ";
	if($n=='404'){ // We only really want to handle 404 and 403 at the moment
		$eDesc="We're sorry but the page you requested is not available, however you might find what your looking for here &hellip;";
	}
	if($n=='403'){
		$eDesc="We're sorry but you are not permitted to access the page you requested, however you might find what your looking for here &hellip;";
	}
}

function year(){print(date("Y"));}

function request_path() {
  static $path;

  if (isset($path)) {
    return $path;
  }

  if (isset($_GET['q']) && is_string($_GET['q'])) {
    // This is a request with a ?q=foo/bar query string. $_GET['q'] is
    // overwritten in drupal_path_initialize(), but request_path() is called
    // very early in the bootstrap process, so the original value is saved in
    // $path and returned in later calls.
    $path = $_GET['q'];
  }
  elseif (isset($_SERVER['REQUEST_URI'])) {
    // This request is either a clean URL, or 'index.php', or nonsense.
    // Extract the path from REQUEST_URI.
    $request_path = strtok($_SERVER['REQUEST_URI'], '?');
    $base_path_len = strlen(rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/'));
    // Unescape and strip $base_path prefix, leaving q without a leading slash.
    $path = substr(urldecode($request_path), $base_path_len + 1);
    // If the path equals the script filename, either because 'index.php' was
    // explicitly provided in the URL, or because the server added it to
    // $_SERVER['REQUEST_URI'] even when it wasn't provided in the URL (some
    // versions of Microsoft IIS do this), the front page should be served.
    if ($path == basename($_SERVER['PHP_SELF'])) {
      $path = '';
    }
  }
  else {
    // This is the front page.
    $path = '';
  }

  // Under certain conditions Apache's RewriteRule directive prepends the value
  // assigned to $_GET['q'] with a slash. Moreover we can always have a trailing
  // slash in place, hence we need to normalize $_GET['q'].
  $path = trim($path, '/');

  return $path;
}

function q(){$_GET['q'] = request_path();}

q();

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head><meta charset="utf-8">

<!-- !apple -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />

<title>Maggie Valley, NC Steakhouse | Hurley's Creekside Dining & Rhum Bar</title>
<meta name="description" content="A family restaurant with a full bar, TripAdvisor 2010 - <?php year(); ?> Certificate of Excellence Winner. USDA CHOICE Steaks and PRIME rib, Reservations Suggested +18289261566">

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/main.css" class="cssfx">
<link rel="stylesheet" href="/css/custom.css" class="cssfx">
<link rel="stylesheet" href="/css/respond.css">

<script src="/js/vendor/cssfx.js"></script>
<script src="/js/vendor/modernizr.js"></script>
</head><body>

<div id="content">
	<div class="container-fluid">
		
	</div>
</div><!-- !/#content -->

<div id="pushup">
	<header id="top-header" class="container-fluid">
		<hgroup class="page-header">
			<h1 class="clearfix">
				<span class="pull-left text-center"><a rel="home" href="/" class="clean"><img src="/img/logo.png"></a> <small class="bot">Creekside Dining and Rhum Bar</small></span>
				<ul class="nav nav-pills pull-right clearfix">
					<li><a href="//facebook.com/hurleys.maggie.valley"	title="Hurley's on facebook">	<i class="ico-facebook"></i></a></li>
					<li><a href="//twitter.com/HurleysMV"				title="Hurley's on twitter">	<i class="ico-twitter"></i></a></li>
				</ul>
			</h1>
			<h2>#1 Steakhouse in Maggie Valley, <abbr title="North Carolina">NC</abbr> <em>3 years running</em></h2>
			<h3>A Family Restaurant with a full bar.</h3>
		</hgroup>
	</header><!-- !/header -->
	
	<div id="top-nav" class="container-fluid">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<a class="hidden-desktop btn btn-navbar" href="#" data-toggle="collapse" data-target=".nav-collapse">
				<i class="ico-food"></i> Main Menu <i class="ico-caret-down"></i></a>
				
				<div role="navigation" class="nav-collapse collapse">
					<ul class="nav">
						<li><a class="clean" href="/specials" title="Best specials in Maggie Valley, NC">
						Specials</a></li>
						
						<li><a class="clean" href="/prime-rib" title="Best prime rib in Maggie Valley, NC">
						Prime Rib</a></li>
						
						<li><a class="clean" href="/steakhouse" title="#1 Steakhouse in Maggie Valley, NC">
						Steaks</a></li>
						
						<li><a class="clean" href="/local-seafood" title="Fresh Local Seafood from Maggie Valley, NC">
						Seafood</a></li>
						
						<li><a class="clean" href="/local-favorites" title="Maggie Valley, NC - Local Favorites/Local Fare">
						Local Favs</a></li>
						
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Best Gourmet Pasta, #1 Burgers, Sandwiches and Appetizers in Maggie Valley, NC">
						More Food <i class="ico-caret-down"></i></a>
						
							<ul class="dropdown-menu">
								<li><a class="clean" href="/gourmet-pasta" title="Best Gourmet Pasta in Maggie Valley, NC">
								Gourmet Pasta</a></li>
								<li><a class="clean" href="/burgers-sandwiches" title="#1 Burgers and Sandwiches in Maggie Valley, NC">
								Burgers/Sandwiches</a></li>
								<li class="divider"></li>
								<li class="nav-header">Even more <i class="ico-caret-down"></i></li>
								<li><a class="clean" href="/starters" title="Start the night off right with awesome Appetizers in Maggie Valley, NC">
								Starters</a></li>
								<li><a class="clean" href="/soups" title="Soups dine-in or carry out in Maggie Valley, NC">
								Soups</a></li>
								<li><a class="clean" href="/salads-salad-bar" title="Salads and Maggie Valley's only Salad Bar">
								Salads and Salad bar</a></li>
								<li><a class="clean" href="/sides" title="Simply the best side menu in Maggie Valley, NC">
								Side menu</a></li>
								<li><a class="clean" href="/add-ons" title="Make you dining experience perfect in Maggie Valley, NC">
								Add ons</a></li>
							</ul>
						</li>
						
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Full bar in Maggie Valley, NC | Classic Cocktails, Rhum Bar, Martini Bar, Premium Win List">
						Drinks <i class="ico-caret-down"></i></a>
						
							<ul class="dropdown-menu">
								<li><a class="clean" href="/classic-cocktails" title="Classic Cocktails from another time in Maggie Valley, NC">
								Classic Cocktails</a></li>
								<li><a class="clean" href="/rhum-bar" title="The Rhum Bar in Maggie Valley, NC">
								The Rhum Bar</a></li>
								<li><a class="clean" href="/martini-bar" title="The Martini Bar in Maggie Valley, NC">
								The Martini Bar</a></li>
								<li><a class="clean" href="/red-wine-list" title="Decadent Red Wines in Maggie Valley, NC">
								Decadent Reds</a></li>
								<li><a class="clean" href="/white-wine-list" title="Refreshing White Wines in Maggie Valley, NC">
								Refreshing Whites</a></li>
								<li><a class="clean" href="/drink-specials" title="Drink Specials in Maggie Valley, NC">
								Drink Specials</a></li>
								<li><a class="clean" href="/local-craft-draught-beer" title="Local Craft Draught Micro Brewery Beer in Maggie Valley, NC">
								Local Craft Draughts</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- !/.navbar-inner -->
		</div>
	</div>
	
	
	<div id="top-info" class="container-fluid">
		<div class="row-fluid">
			
			<div class="col-fluid text-center trip">
				<h3><a title="Hurley's Creekside, Maggie Valley - Restaurant Reviews - tripadvisor" href="http://l.s12.in/jq4BM" class="trip">tripadvisor</a></h3>
				<h4><img src="/img/ta-ce-ribbon.png" alt="Certificate of excellence"></h4>
				<h5 class="label label-success text-center">Certificate of Excellence</h5>
				<img src="/img/ta-rating.png" alt="Tripadvisor Rated 4.5/5 stars">
				<h6>&mdash; 2010 2011 2012 2013 &mdash;</h6>
			</div>
			
			<div class="col-fluid league">
				<h2>Open 7 Days &raquo; 4pm - late</h2>
				<h4>Reservations Suggested <span class="hidden-phone">828 926 1566</span></strong><span class="visible-phone"><a class="btn" href="tel:+18289261566" title="Call Now">Call Now<i class="ico-mobile"></i></a></span></h4>
			</div>
			
			<div class="col-fluid league">
				<div class="best-wrapper">
					<div id="best-inner"><h1 id="best" class="red rotate90">BEST</h1></div>
					<div id="best-after" class="green">
						<h2>Atmosphere</h2>
						<h2>Food</h2>
						<h2>Service</h2>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div id="top-carousel" class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-interval="3000" data-pause="false">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<a class="clean" href="/salad-bar" title="Endless Salad bar is back at Hurley's just in time! Great Local Produce, 20 Items Prepared Fresh Daily"><img src="/img/slide/01.png" alt="Now just $7.95 or $3.95 with your entree!"></a>
					<div class="carousel-caption">
						<h2>Salad bar is back!</h2>
						<h3>20 Items prepared fresh daily...</h3>
						<p class="lead">Dive into our garden for $7.95 or enhance your entree $3.95</p>
					</div>
				</div>
				<div class="item">
					<a class="clean" href="/surf-turf" title="Delicious Signature Surf and Turf"><img src="/img/slide/surf.png" alt="Make it special and Add Shrimp $8.95"></a>
					<div class="carousel-caption">
						<h2>Surf's Up!</h2>
						<h3>Make it <abbr title="delicious">ono</abbr></h3>
						<p class="lead">&hellip;and Add Shrimp $8.95 or Trout $11.95 to your steak dinner!</p>
					</div>
				</div>
				<div class="item">
					<a class="clean" href="/accomodations" title="Table for 2, 5 or 25 - Couples, Families and Large Groups"><img src="/img/slide/03.png" alt="We can accomodate, make a reservation now +18289261566"></a>
					<div class="carousel-caption">
						<h2>Table for 2, 5 or 25</h2>
						<h3>Couples, Families and Large Groups</h3>
						<p class="lead">We can accommodate. <strong>Reservations suggested. <span class="hidden-phone">828 926 1566</span></strong><span class="visible-phone"><a class="btn" href="tel:+18289261566" title="Call Now">Call Now<i class="ico-mobile"></i></a></span></p>
					</div>
				</div>
				<div class="item">
					<a class="clean" href="/surroundings" title="Surreal Surroundings! -Nestled amongst the awesome great smokey mountains of North Carolina"><img src="/img/slide/04.png" alt="In Beautiful Maggie Valley!"></a>
					<div class="carousel-caption">
						<h2>Surreal Surroundings</h2>
						<h3>In Beautiful Maggie Valley!</h3>
						<p class="lead"><em>Nestled amongst the awesome great smokey mountains of North Carolina</em></p>
					</div>
				</div>
				<div class="item">
					<a class="clean" href="/creekside-dining" title="Creekside&hellip; Perfect"><img src="/img/slide/05.png" alt="Relaxing & Beautiful, Naturally -Dine in our screened in patio or right outside by the creek"></a>
					<div class="carousel-caption">
						<h2>Creekside&hellip; Perfect</h2>
						<h3>Relaxing & Beautiful,</h3>
						<p class="lead">Naturally <em>&ndash;Dine in our screened in patio or right outside by the creek</em></p>
					</div>
				</div>
			</div><!-- !/.carousel-inner -->

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>

	<div class="container-fluid">
		<div id="alerts">
			<!--[if lt IE 9]><div class="alert alert-error"><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> or <a href="//google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p></div><![endif]-->
			<?php if (isset($n)): ?>
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<p><?php print $eTitle . $eDesc; ?></p>
			</div><?php endif; ?>
		</div><!-- !/#alerts -->
	</div>

	<div class="container-fluid">
		<div class="hero-unit hero-umbrella league">
			<aside class="sidekick pull-right text-center">
				<h3>Year Round</h3>
				<h4>Outdoor &amp; Indoor</h4>
				<h2>Seating</h2>
				<h5>on the</h5>
				<h1>Creek</h1>
			</aside>
			<h4 class="hero-title">Fresh &amp; Local</h4>
			<ul><li>Prime Rib</li> <li>Steaks</li> <li>Seafood</li></ul>
			<ul><li>Pasta</li> <li>Burgers</li> <li>Sandwiches</li></ul>
			<ul class="clearfix"><li>Soups</li> <li>Salads</li> <li>Appetizers</li></ul>
		</div>
	</div>

</div><!-- !/.pushup -->

<div id="footer">
	<footer class="container-fluid">
		<div class="row-fluid">
			<div class="col-fluid">
				<h6>{ Communicating with Hurley's }</h6>
				<div class="vcard">
					<div class="tel">
						<span class="type">Reservations</span>: <span class="value">+1</span> <span class="value">828</span> <span class="value">926</span> <span class="value">1566</span>
					</div>
					<div class="email">
						<a href="mailto:aimtoplease@hurleysmaggievalley.com" title="Comments, Suggestions, Feedback, Planning, Reservations">aimtoplease@hurleysmaggievalley.com</a>
					</div>
					<div class="adr">
						<a class="org url" href="//hurleysmaggievalley.com">Hurley's Creekside</a>
						<div class="street-address">4352 Soco Road</div>
						<span class="locality">Maggie Valley</span>, <abbr class="region" title="North Carolina">NC</abbr> <span class="postal-code">28751</span>
					</div>
				</div>
			</div>

			<div class="col-fluid">
				<h6>{ Connecting to Hurley's }</h6>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="//facebook.com/hurleys.maggie.valley" title="Hurley's on facebook"><i class="ico-facebook"></i>facebook</a></li>
						<li><a href="//twitter.com/HurleysMV" title="@HurleysMV on twitter"><i class="ico-twitter"></i>twitter</a></li>
						<li><a href="//plus.google.com/110525306221086972727" title="Google+"><i class="ico-google-plus"></i>Google +</a></li>
					</ul>
			</div>

			<div class="col-fluid">
				<h6>{ Talking about Hurley's }</h6>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="//l.s12.in/jq4BM" title="Restaurant Reviews on TripAdvisor"><i class="ico-checkin"></i>tripadvisor</a></li>
						<li><a href="//l.s12.in/Wj" title="Rants on Yelp"><i class="ico-chat"></i>Yelp</a></li>
						<li><a href="//l.s12.in/Wle0Z" title="Comments on Urban Spoon"><i class="ico-food"></i>UrbanSpoon</a></li>
					</ul>
			</div>

			<div class="col-fluid legal">
				<h6>{ &hellip; }</h6>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="/terms.php"><i class="ico-library"></i>Terms</a></li>
						<li><a href="/privacy.php"><i class="ico-user"></i>Privacy</a></li>
						<li><a href="/credits.php"><i class="ico-cc-by"></i>Credits</a></li>
					</ul>
			</div>
		</div>
	</footer>
</div><!-- !/#footer -->

<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery.js"><\/script>')</script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>

<!-- !Move to main.js -->
<span class="request_path" data-query="<?php print request_path(); ?>"></span>
<script>
	$(document).ready(function(){
		$('a.clean').live("click", function(e){
			e.preventDefault();
			
			var x = $(this).attr('href'); var y; var z=0;
			var r = /\/(.*)?/g;
			var m = r.exec(x);
			
			if (m[0]){
				y = "#"+m[0];
			}
			
			if(x='/'){y=0;}else{
				y = ""+y+"";
				y = $(y);
			
				var z = y.scrollTop();
			}
			
			console.log("Q: "+$('span.request_path').attr('data-query'));
			console.log("E: "+e);
			console.log("X: "+x);
			console.log("Y: "+y);
			console.log("Z: "+z); //debug first
			
			//window.scrollTo(z, 0);
		});
	});
</script></body></html>
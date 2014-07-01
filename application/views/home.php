<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="icon" href="./images/favicon.ico">
		<link rel="shortcut icon" href="./images/favicon.ico">
		<link rel="stylesheet" href="./css/camera.css">
		<link rel="stylesheet" href="./css/component.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/jquery.js"></script>
		<script src="./js/jquery-migrate-1.1.1.js"></script>
		<script src="./js/jquery.equalheights.js"></script>
		<script src="./js/jquery.ui.totop.js"></script>
		<script src="./js/jquery.easing.1.3.js"></script>
		<script src="./js/camera.js"></script>
		<script src="./js/snap.svg-min.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="./js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
			loader: false,
			pagination: true ,
			minHeight: '394',
			thumbnails: false,
			height: '40.1875%',
			caption: false,
			navigation: false,
			fx: 'mosaic'
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
		})
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="./css/ie.css">
		<![endif]-->
		<!--[if lt IE 10]>
		<link rel="stylesheet" media="screen" href="./css/ie1.css">
		<![endif]-->
	</head>
	<body class="page1">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="./"><img src="./images/logo.png" alt="Boo House"></a></h1>
					<div class="menu_block">
						<nav id="bt-menu" class="bt-menu bt-menu-open">
							<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
							<ul>
								<li class="current bt-icon"><a href="./">首页</a></li>
								<li class="bt-icon"><a href="./home/about">博雅简介</a></li>
								<li class="bt-icon"><a href="./home/services">服务内容</a></li>
								<li class="bt-icon"><a href="./home/projects">案例</a></li>
								<li class="bt-icon"><a href="./home/teams">团队成员</a></li>
								<li class="bt-icon"><a href="./home/contacts">联系我们</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--==============================header2=================================-->
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="./images/slide.jpg"></div>
				<div data-src="./images/slide1.jpg"></div>
				<div data-src="./images/slide2.jpg"></div>
			</div>
		</div>
		<div class="container_12">
			<div class="grid_12">
				<div class="slogan">
					我们将点亮你的生活! <br>
					<a href="#" class="btn">更多</a>
				</div>
			</div>
		</div>
		<div class="container_12">
			<section class="grid" id="grid">
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">服务内容</div>
						</figcaption>
					</figure>
					<span>更多</span>
				</a>
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
							<div class="title">成功案例</div>
						</figcaption>
					</figure>
					<span>更多</span>
				</a>
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">博雅团队</div>
						</figcaption>
					</figure>
					<span>更多</span>
				</a>
				<a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
					<figure>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
						<figcaption>
						<div class="title">联系我们</div>
						</figcaption>
					</figure>
					<span>更多</span>
				</a>
			</section>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_6">
					<img src="./images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<div class="title1">为你定制的团队!</div>
						<p>If you want to download this <span class="col3"><a href="#" rel="dofollow">freebie</a></span>, visit Our blog.</p>
						Want to find more themes of this kind? Go to <span class="col3"><a href="#" rel="nofollow">Business and Services</a></span> website templates.
					</div>
					<div class="clear cl1"></div>
					In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis
				</div>
				<div class="grid_3">
					<div class="block1">
						<div class="title">20 <span>Years of Experience</span></div>
						In mollis erat matt nequemer facilameteserylerarutrum. Cras facilisis, nulla
						<br>
						<a href="#" class="btn bt1">more</a>
					</div>
				</div>
				<div class="grid_3 ver">
					<div class="block1">
						<div class="title">18 <span>Partner Programs</span></div>
						Cras facilisis, nulla vel viverra auctor, leo magna sodaleel alesuada nibh odio ulit
						<br>
						<a href="#" class="btn bt1">more</a>
					</div>
				</div>
			</div>
		</div>
		<div class="gray_block">
			<div class="container_12">
				<div class="grid_4">
					<div class="block2">
						<time datetime="2014-01-01"><span class="col1">18</span>january</time>
						<div class="">
							<div class="extra_wrapper">
								<div class="title col1"><a href="#">Etiam dui ero laoretsiter golyn</a></div>
							</div>
						</div>
						<div class="clear"></div>
						<p>Vivamus at magna non nunc tristiq oncus. Aliquam nibh ante, egestas id dicttuser</p>
						<a href="#" class="col1">read more</a>
					</div>
				</div>
				<div class="grid_4">
					<div class="block2">
						<time datetime="2014-01-01"><span class="col1">21</span>january</time>
						<div class="">
							<div class="extra_wrapper">
								<div class="title col1"><a href="#">Hom dui erosi laorufeiter milyno</a></div>
							</div>
						</div>
						<div class="clear"></div>
						<p>Non nunc tristique ous. Aliqum nibh ante, egestas id dictumctuser liberoraesnt</p>
						<a href="#" class="col1">read more</a>
					</div>
				</div>
				<div class="grid_4">
					<div class="block2">
						<time datetime="2014-01-01"><span class="col1">12</span>february</time>
						<div class="">
							<div class="extra_wrapper">
								<div class="title col1"><a href="#">Joui eros, laorulberer golyno</a></div>
							</div>
						</div>
						<div class="clear"></div>
						<p>Vivamus at magna non nunc tristique os. Aliquam nibh ante, egestas id dicuser</p>
						<a href="#" class="col1">read more</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="clear"></div>
					<div class="copy">
						BizGroup &copy; 2014 | <a href="#">Privacy Policy</a> 
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(document).ready(function(){
			$(".bt-menu-trigger").toggle(
				function(){
					$('.bt-menu').removeClass('bt-menu-open');
				},
				function(){
					$('.bt-menu').addClass('bt-menu-open');
				}
			);
		});
			(function() {
			function init() {
				var speed = 250,
				easing = mina.easeinout;
				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
				var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
					pathConfig = {
					from : path.attr( 'd' ),
					to : el.getAttribute( 'data-path-hover' )
					};
				el.addEventListener( 'mouseenter', function() {
					path.animate( { 'path' : pathConfig.to }, speed, easing );
				} );
				el.addEventListener( 'mouseleave', function() {
					path.animate( { 'path' : pathConfig.from }, speed, easing );
				} );
				} );
			}
			init();
			})();
		</script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$title;?></title>
		<link rel="icon" href="../images/favicon.ico">
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.1.1.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/touchTouch.jquery.js"></script>	
		<script>
		function setCookie(name,value){
				var Days = 30;
				var exp = new Date();   
				exp.setTime(exp.getTime() + 3600*24*7*31);
				document.cookie = name + "="+ escape (value) + ";domain=localhost;expires=" + exp.toGMTString();
			}
		$(document).ready(function(){
			$('a#lang').click(function(){
					setCookie('lang','<?=$lang;?>');
					location.reload();
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('.gallery a.gal').touchTouch();
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
		<script src="../js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="../css/ie.css">
		<![endif]-->
		<!--[if lt IE 10]>
		<link rel="stylesheet" media="screen" href="../css/ie1.css">
		<![endif]-->
	</head>
	<body class="">
<!--==============================header=================================-->
		<header>
			<?=$language;?>
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="./"><img src="../images/logo.png" alt="Boo House"></a></h1>
					<div class="menu_block">
						<nav id="bt-menu" class="bt-menu bt-menu-open">
							<a href="#" class="bt-menu-trigger"><span></span></a>
							<ul>
								<li class="bt-icon"><a href="../"><?=$home;?></a></li>
								<li class="bt-icon"><a href="../home/about"><?=$introduction;?></a></li>
								<li class="bt-icon"><a href="../home/services"><?=$service;?></a></li>
								<li class="bt-icon"><a href="../home/projects"><?=$example;?></a></li>
								<li class="current bt-icon"><a href="../home/teams"><?=$member;?></a></li>
								<li class="bt-icon"><a href="../home/contacts"><?=$contact;?></a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content cont2">
			<div class="container_12">
				<div class="grid_12">
					<h2 class="mb0"><?=$title1;?></h2>
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_8">
					<div class="blog">
						<img src="../images/page5_img1.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Julie Peng</a>
							<time class="col2" datetime="2014-01-01"><?=$position1;?></time>
							</div><?=$intro1;?>
							<br>
							<a href="#" class="btn"><?=$more;?></a>
						</div>
					</div>
					<div class="blog bd1">
						<img src="../images/page5_img2.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Dream Fu</a>
							<time class="col2" datetime="2014-01-01"><?=$position2;?></time>
							</div><?=$intro2;?>
							<br>
							<a href="#" class="btn"><?=$more;?></a>
						</div>
					</div>
					<div class="blog bd2">
						<img src="../images/page5_img3.jpg" alt="">
						<div class="extra_wrapper">
							<div class="text1">
							<a href="#">Stella Zhang</a>
							<time class="col2" datetime="2014-01-01"><?=$position3;?></time>
							</div><?=$intro3;?>
							<br>
							<a href="#" class="btn"><?=$more;?></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="text1 col3 head1"><?=$other;?></div>
					<ul class="list l1">
						<li><a href="#"><?=$li1;?></a></li>
						<li><a href="#"><?=$li2;?></a></li>
						<li><a href="#"><?=$li3;?></a></li>
						<li><a href="#"><?=$li4;?></a></li>
						<li><a href="#"><?=$li5;?></a></li>
					</ul>
					<ul class="list l1">
						<li><a href="#"><?=$li6;?></a></li>
						<li><a href="#"><?=$li7;?></a></li>
						<li><a href="#"><?=$li8;?></a></li>
						<li><a href="#"><?=$li9;?></a></li>
						<li><a href="#"><?=$li10;?></a></li>
					</ul>
					<div class="text1 head1 col3">
						<?=$join;?>
					</div>
					<div class="post">
						<div class="fl">
							<img src="../images/page5_img4.jpg" alt="">
							<time datetime="2014-01-01">2014-01-24</time>
						</div>
						<div class="extra_wrapper">
							<a href="#"><?=$joinintro;?></a>
						</div>
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
		</script>
	</body>
</html>
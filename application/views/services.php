<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$title;?></title>
		<link rel="icon" href="../images/favicon.ico">
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="stylesheet" href="../css/list.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.1.1.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/m.js"></script>
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
								<li class="current bt-icon"><a href="../home/services"><?=$service;?></a></li>
								<li class="bt-icon"><a href="../home/projects"><?=$example;?></a></li>
								<li class="bt-icon"><a href="../home/teams"><?=$member;?></a></li>
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
		<div class="content cont1">
			<div class="container_12">
				<div class="grid_12">
					<h2 class="mb0"><?=$title1;?></h2>
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_12">
					<div class="responsive">
						<ul class="a_content">
							<?php foreach ($all_Content as $items):?>
							<li>
								<div class="card-front">
									<div class="text2">
                						<?php echo $items->title ?>
									</div>
									<p>
										<?php echo $items->short_content ?>
            						</p>
            					</div>
								<div class="card-back">
									<h2><a href="#"><?=$more;?></a></h2>
								</div>
								<!-- Content -->
								<div class="all-content">
									<div class="text2">
                						<?php echo $items->title ?>
									</div>
									<p>
										<?php echo $items->full_content ?>
            						</p>
								</div>
							</li>
						 <?php endforeach ?>
						</ul>
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
			$('.responsive').on('click', '.close', function(){
				$('.close').remove();
				bgColor = $('.active .card-front').css('background-color');
				$('.responsive').removeClass(effect);
				$('.all-content').hide();
				$('.content li').removeClass('active').show().css({ 
					'border-bottom':'1px solid #2c2c2c',
					'border-left':'1px solid #2c2c2c' 
				});
				$('.card-front, .card-back').show();
				$('.content').css('background-color',bgColor);
			});
		});
		</script>
	</body>
</html>
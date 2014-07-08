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
	<body class="pt0">
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
								<li class="current bt-icon"><a href="../home/about"><?=$introduction;?></a></li>
								<li class="bt-icon"><a href="./services"><?=$service;?></a></li>
								<li class="bt-icon"><a href="./projects"><?=$example;?></a></li>
								<li class="bt-icon"><a href="./teams"><?=$member;?></a></li>
								<li class="bt-icon"><a href="./contacts"><?=$contact;?></a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates - February 24, 2014!</div>
			<div class="container_12">
				<div class="grid_4">
					<h2><?=$title1;?></h2>
					<img src="../images/page2_img.jpg" alt="" class="img_inner">
					<div class="text1 col2"><a href="#">香港博雅教育咨询公司是UIC史上第一支由就读于世界名校的学长学姐组成的留学申请团队，是第一个真正属于UICer的留学互助联盟.</a></div>
					<p>博雅教育团队成员均就读或毕业于UIC，熟知UIC的优势与特色，也了解UICer的申请亮点与需求。秉承UIC渊博雅正的教学理念，博雅教育专业从事英国、香港、澳洲、美国、加拿大、新加坡留学申请工作.</p>
					凭借团队成员丰富的留学经验和出色的文书写作能力，博雅教育已经成为UICer出国读研的留学首选.<br>
					<!-- <a href="#" class="btn">more</a> -->
				</div>
				<div class="grid_4">
					<h2><?=$title2;?></h2>
					<ul class="list1">
						<li>
							<time datetime="2014-01-01">2013.6 </time>
							<div class="extra_wrapper"><a href="#">香港博雅教育咨询公司在香港注册成立.</a></div>
						</li>
						<li>
							<time datetime="2014-01-01">2013.9 </time>
							<div class="extra_wrapper"><a href="#">第一版网站上线,大量UICer线上咨询.同时博雅微信平台建立,每天向同学们推送最新留学信息.</a></div>
						</li>
						<li>
							<time datetime="2014-01-01">2013.11 </time>
							<div class="extra_wrapper"><a href="#">由于日益增加的申请人数，博雅教育文案组从UIC各系吸收了优质的新鲜血液，以保证“一对一”文书写作的质量.</a></div>
						</li>
						<li>
							<time datetime="2014-01-01">2013.12 </time>
							<div class="extra_wrapper"><a href="#">经过一年的积累与沉淀，博雅教育根据申请者的特殊需求拓展了服务内容，增加了纯文书写作服务.</a></div>
						</li>
						<li>
							<time datetime="2014-01-01">2014.6 </time>
							<div class="extra_wrapper"><a href="#">博雅从最初的一人肩负多职，到现在拥有分工明确、各司其职的运作体系，博雅教育不断发展并成熟着.</a></div>
						</li>
						<li>
							<time datetime="2014-01-01">今天 </time>
							<div class="extra_wrapper"><a href="#">从创立至今，博雅教育已经成功为UICer申请到美国加州大学洛杉矶分校(UCLA)、伦敦政治经济学院(LSE)、英国华威大学、约克大学、爱丁堡大学、香港大学、香港中文大学、澳洲国立大学、墨尔本大学、悉尼大学、美国范德堡大学、波士顿大学等众多世界知名学府。在未来的时间里，博雅教育愿为每一位莘莘学子敲开世界名校的大门。申请者的梦想不停止，我们的脚步也将一直跟随.</a></div>
						</li>
					</ul>
				</div>
				<div class="grid_4">
					<h2><?=$title3;?></h2>
					<div class="text1 col2"><a href="#">博雅教育凭借“专业,负责,个性化”的服务宗旨,赢得了众多UIC学子及其家长的支持与信任.</a></div>
					<div class="text1 col2"><p><a href="#">博雅教育: </a></p></div>
					<ul class="list">
						<li><a href="#">注重品质</a></li>
						<li><a href="#">注重信誉</a></li>
						<li><a href="#">注重口碑</a></li>
					</ul>
					我们的文书写作服务均由“一对一”文案组成员高效,优质地完成.每一位申请者的要求都是博雅努力的目标.我们深知现有的好口碑是脚踏实地换来的,我们既是留学前辈,也是你的朋友.博雅教育愿为每一位同学提供优质的留学申请服务,助你圆梦心中的理想学校!
				</div>
			</div>
		</div>
		<div class="gray_block center">
			<div class="container_12">
				<div class="grid_12">
					<h3>Best Professionals</h3>
				</div>
				<div class="grid_3">
					<div class="block3">
						<img src="../images/page2_img1.jpg" alt="">
						<div class="text2"><a href="#">Mark Johnson</a></div>
						In mollis erat matt nequemer facilameteserylerarutrum.
					</div>
				</div>
				<div class="grid_3">
					<div class="block3 bd1">
						<img src="../images/page2_img2.jpg" alt="">
						<div class="text2"><a href="#">Ingrid Wood</a></div>
						In mollis erat matt nequemer facilameteserylerarutrum.
					</div>
				</div>
				<div class="grid_3">
					<div class="block3 bd2">
						<img src="../images/page2_img3.jpg" alt="">
						<div class="text2"><a href="#">Linda Smith</a></div>
						In mollis erat matt nequemer facilameteserylerarutrum.
					</div>
				</div>
				<div class="grid_3">
					<div class="block3 bd3">
						<img src="../images/page2_img4.jpg" alt="">
						<div class="text2"><a href="#">Devid Grosh</a></div>
						In mollis erat matt nequemer facilameteserylerarutrum.
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
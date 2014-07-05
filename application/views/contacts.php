<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title;?></title>
		<meta charset="utf-8">
		<link rel="icon" href="../images/favicon.ico">
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="stylesheet" href="../css/form.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.1.1.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/touchTouch.jquery.js"></script>
		<script src="../js/TMForm.js"></script>
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


		<!--引用百度地图API-->
		<style type="text/css">
   	 	html,body{margin:0;padding:0;}
    		.iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    		.iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
		</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>



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
								<li class="bt-icon"><a href="../home/teams"><?=$member;?></a></li>
								<li class="current bt-icon"><a href="../home/contacts"><?=$contact;?></a></li>
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
				<div class="grid_12">
					<div class="map">
						 <div style="width:940px;height:400px;border:#ccc solid 1px;" id="dituContent"></div>
					</div>
				</div>
				<div class="grid_4">
					<h2 class="head1"><?=$address;?></h2>
					<div class="map">
					<address>
						<dl>
							<dt><?=$address1;?></dt>
							<dd><?=$qq;?></dd>
							<dd><?=$phone;?></dd>
							<dd><?=$wechat;?></dd>
							<dd><?=$email;?></dd>
							<dd><?=$weibo;?></dd>
						</dl>
					</address>

				  </div>
				</div>
				<div class="grid_8">
					<h2 class="head1"><?=$formtitle;?></h2>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">发送成功</div>
						</div>
						<label class="name">
							<input type="text" name="username" placeholder="<?=$formname;?>" data-constraints="@Required" />
							<span class="empty-message">*此字段必填</span>
							<span class="error-message">*非法姓名</span>
						</label>
						<label class="email">
							<input type="text" name="email" placeholder="<?=$formemail;?>" data-constraints="@Required @Email" />
							<span class="empty-message">*此字段必填</span>
							<span class="error-message">*非法邮件地址</span>
						</label>
						<label class="phone">
							<input type="text" name="phone" placeholder="<?=$formphone;?>" data-constraints="@Required @JustNumbers"/>
							<span class="empty-message">*此字段必填</span>
							<span class="error-message">*非法电话号码</span>
						</label>
						<label class="message">
							<textarea placeholder="<?=$formmessage;?>" name="content" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*此字段必填</span>
							<span class="error-message">*内容不够哟，至少20个字符~</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn"><?=$formclear;?></a>
								<a href="#" data-type="submit" class="btn"><?=$formsend;?></a>
							</div>
						</div>
					</form>
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

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(114.17979,22.323533);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"博雅留学",content:"手机：18969021266<br/>微信：boyaedu123",point:"114.180625|22.322981",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>

	</body>
</html>
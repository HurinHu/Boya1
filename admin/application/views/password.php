<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理系统--AIESEC中大</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('css/bootstrap.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('css/dashboard.css')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?=base_url('js/ie8-responsive-file-warning.js')?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url('js/html5shiv.js')?>"></script>
      <script src="<?=base_url('js/respond.min.js')?>"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>">AIESEC中大</a>
        </div>
        <span class="username">欢迎 <?=$user;?></span>
        <img src="data:image/png;base64,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" width="20" class="setting"/>
        <ul class="dropdownmenu" role="menu">
	        <li><a href="<?=base_url('/password')?>">Change Password</a></li>
	        <li><a href="<?=base_url('/logout')?>">Logout</a></li>
	    </ul>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?=base_url()?>#">总概</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?=base_url('/home')?>">首页</a></li>
            <li><a href="<?=base_url('/about')?>">了解AIESEC</a></li>
            <li><a href="<?=base_url('/story')?>">AIESEC故事</a></li>
            <li><a href="<?=base_url('/project')?>">本地项目</a></li>
            <li><a href="<?=base_url('/join')?>">加入AIESEC</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    	<br />
      	<div class="well well-lg" style="min-height:500px;">
      		<div class="container" style="margin-left:-5.5em;">
	      		<form class="form-signin" role="form" action="<?=base_url('password/change')?>" method="post">
		      		<h2 class="form-signin-heading">修改密码</h2>
		      		<br />
		      		<p class="text-danger"><?=$error;?></p>
		      		<div class="row">
			      		<div class="col-md-5">
				      		<div style="padding-top:5pt;"><font size="4em"><strong>旧密码</strong></font></div>
				      	</div>
				      	<div class="col-md-7">
					      	<input type="text" name="oldpw" class="form-control" placeholder="Old Password" required autofocus>
					    </div>
					    <div class="col-md-5">
						    <div style="padding-top:5pt;"><font size="4em"><strong>新密码</strong></font></div>
						</div>
						<div class="col-md-7">
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
						<div class="col-md-5">
						 	<div style="padding-top:5pt;"><font size="4em"><strong>新密码</strong></font></div>
						</div>
						<div class="col-md-7">
							<input type="password" name="cpassword" class="form-control" placeholder="Password">
						</div>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">修改</button>
				</form>
      	</div>
    </div>

        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('js/jquery.min.js')?>"></script>
    <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('js/docs.min.js')?>"></script>
    <script src="<?=base_url('js/dashboard.js')?>"></script>
  </body>
</html>

    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理系统--博雅教育</title>

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
          <a class="navbar-brand" href="<?=base_url()?>">博雅教育</a>
        </div>      
      </div>
    </div>

    <div class="container-fluid">
    	<br />
      	<div class="well well-lg" style="min-height:500px;">
      		<div class="container" style="margin-top:10%;">
	      		<form class="form-signin" role="form" action="<?=base_url('login/auth')?>" method="post">
		      		<h2 class="form-signin-heading">后台管理系统</h2>
		      		<br />
		      		<p class="text-danger"><?=$error;?></p>
		      		<div class="row">
			      		<div class="col-md-4">
				      		<div style="padding-top:5pt;"><font size="4em"><strong>用户名</strong></font></div>
				      	</div>
				      	<div class="col-md-8">
					      	<input type="text" name="user" class="form-control" placeholder="User Name" required autofocus>
					    </div>
					    <div class="col-md-4">
						    <div style="padding-top:5pt;"><font size="4em"><strong>密码</strong></font></div>
						</div>
						<div class="col-md-8">
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
				</form>
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

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Hệ Thống Quản Trị Website Cục Hợp Tác Quốc Tế Bộ Văn Hoá Thể Thao Và Du Lịch</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url();?>css/login/css/bootstrap.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center" style="color: #0F12B1;font-weight: bold;">System Administration Website </br><h3 style="font-size: 14px;text-align: center;color: blue;text-bold: 20px;font-weight: bold;">International Cooperation Bureau of the Ministry of Culture Sports and Tourism</h3></h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="<?php echo base_url();?>page/check_login">
            <div class="form-group">
              <input id="username" type="text" name="username" class="form-control input-lg" placeholder="Tên Đăng Nhập">
            </div>
            <div class="form-group">
              <input id="password" type="password" name="password" class="form-control input-lg" placeholder="Mật Khẩu">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" id="int_your_singin">Sign In</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  </div>	
      </div>
  </div>
  </div>
</div>

	<!-- script references -->
		
		<script src="<?php echo base_url();?>css/login/js/bootstrap.min.js"></script>
	</body>
</html>
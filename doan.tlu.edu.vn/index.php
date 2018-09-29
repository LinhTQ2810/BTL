<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>.: Sinh Viên - 	Quản lí đồ án :.</title>
		<?php require "Includes/layout/Shared/header.php";
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</HEAD>
	<BODY>
		<?php require "Includes/layout/Shared/menu_logo.php";?>
		<div class="container-home" style="display: flex; height: auto; margin-top: 40px;margin-bottom: 15px;">
			
			<div class="panel panel-info" style="width:35%">
      			<div class="panel-heading" style="text-align: center;font-weight: 700; font-size:15px;color: blue">Sinh viên cần biết</div>
      			<div class="panel-body" id="notice" style="padding-left: 15px; padding-right:10px; color: blue; font-weight: 450;font-size: 15px">
					


      			</div>
    		</div>

    		<div class="panel panel-info" style="width: 65%">
      			<div class="panel-heading" style="text-align: center;font-weight: 500; font-size:15px;color: blue">Đồ án đã hoàn thành</div>
      			<div class="panel-body" id="doandahoanthanh" style="padding-left: 15px; padding-right:10px; color: blue; font-weight: 450;font-size: 15px">
						
      			</div>
    		</div>


		</div>
	</BODY>
	<FOOTER>
		<?php require "Includes/layout/Shared/footer.php";?>
	</FOOTER>
</HTML>
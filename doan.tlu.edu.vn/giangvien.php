<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
	<HTML>
		<HEAD>
			<title>.: Giảng viên - 	Quản lí đồ án :.</title>
			<?php require "Includes/layout/Shared/header.php";?>
		</HEAD>
		<BODY>
			<?php require "Includes/layout/Shared/menu_logo.php";?>
			<div class="container-home">
				<?php require "Includes/layout/Shared/menu_trai_giangvien.php";?>
				<?php require "Includes/layout/Shared/home_phai_giangvien.php";?>
			</div>
		</BODY>
		<FOOTER>
			<?php require "Includes/layout/Shared/footer.php";?>
		</FOOTER>

		<script>
			function xacnhandangki(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/xacnhandangkisinhvien.html")
			}

			function detaisinhvien(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/detaisinhvien.html")
			}

			function lichsudangkihuongdan(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/lichsudangkihuongdan.html")
			}

			function doandanghuongdan(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/doandanghuongdan.html")
			}

			function doanphanbien(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/doanphanbien.html")
			}

			function xinykienkhoa(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/xinykienkhoa.html")
			}

			function denghikhoadetai(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/denghikhoadetai.html")
			}

			function huongnghiencuu(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/huongnghiencuu.html")
			}

			function doantunghuongdan(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/doantunghuongdan.html")
			}
			function doimatkhau(){
				$("#important_news_gv").load("http://localhost/doan.tlu.edu.vn/Pages/doimatkhautk.html")
			}
		</script>
	</HTML>
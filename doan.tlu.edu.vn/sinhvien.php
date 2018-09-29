<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
	<HEAD>
		<title>.: Sinh Viên - 	Quản lí đồ án :.</title>
		<?php require "Includes/layout/Shared/header.php";?>
	</HEAD>
	<BODY>
		<?php require "Includes/layout/Shared/menu_logo.php";?>
		<div class="container-home">
			<?php require "Includes/layout/Shared/menu_trai_sinhvien.php";?>
			<?php require "Includes/layout/Shared/home_phai_sinhvien.php";?>
		</div>
	</BODY>
	<FOOTER>
		<?php require "Includes/layout/Shared/footer.php";?>
	</FOOTER>

	<script>
		function dangkidetai() {

			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/dangkidetai.html");

		}

		function dangkitheogiangvien() {
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/dangkidetaitheogiangvien.html");

		}

		function lichsudangki(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/ketquadangki.html");
		}

		function lichsuthuchiendoan(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/lichsuthuchiendoan.html");
		}

		function tiendo(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/tiendo.html");
		}

		function thongtingiangvien(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/thongtingiangvien.html");
		}

		

		function doandatotnghiep(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/doandahoanthanh.html");
		}

		function doimatkhau(){
			$("#important_news").load("http://localhost/doan.tlu.edu.vn/Pages/doimatkhautk.html");
		}

		
	</script>
</HTML>
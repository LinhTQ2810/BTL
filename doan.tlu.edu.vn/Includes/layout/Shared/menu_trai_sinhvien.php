<div class="left-home">
					<!--Begin Left-->
	<div style="Z-INDEX: 500; MARGIN-TOP: 10px" id="left">
		<p>

		    <link href="Includes/menu/font-awesome.min.css" rel="stylesheet" type="text/css">
		    <!-- Ionicons 2.0.0 -->
		    <link href="Includes/menu/ionicons.min.css" rel="stylesheet" type="text/css">    
		    <!-- Theme style -->
		    <link href="Includes/menu/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
		    <!-- AdminLTE Skins. Choose a skin from the css/skins 
		         folder instead of downloading all of them to reduce the load. -->
		    <link href="Includes/menu/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
		      

			<!-- jQuery 2.1.4 -->
		    <script src="Includes/menu/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		    <!-- jQuery UI 1.11.2 -->
		    <script src="Includes/menu/jquery-ui.min.js" type="text/javascript"></script>
    
    
    
		    <!-- AdminLTE App -->
		    <script src="Includes/menu/dist/js/app.min.js" type="text/javascript"></script>   
		</p>

		<div class="skin-green-light sidebar-mini">
			<div id="Menu1_div_nav_menu" class="sidebar">
				<ul class="sidebar-menu">
					<li class="header">DANH MỤC CHÍNH</li>

					<li > 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Đăng ký đồ án tốt nghiệp</span>
							<i class="fa fa-angle-left pull-right"></i>
							
						</a>
							
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="dangkidetai()">Định hướng cá nhân</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="dangkitheogiangvien()">Đăng ký giảng viên</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="lichsudangki()">Kết quả đăng ký đồ án</a>
							</li>

							

							
						</ul>
					</li>
					
					<li > 
						<a>
							<img class="fa" src="images/lg.sandglass-time-loading-gif.gif">
							<span onclick="tiendo()">Tiến độ hoàn thành đồ án tốt nghiệp</span>
						</a>
					</li>

					<li class="treeview"> 
						<a onclick="lichsuthuchiendoan()">
							<span>Lịch sử thực hiện đồ án</span>
						</a>
					</li>

					<li> 
						<a>
							<i class="fa fa-search"></i>
							<span>Tra cứu</span>
							<i class="fa fa-angle-left pull-right"></i>
							
						</a>
					
						<ul class="treeview-menu" style="display: none;">
							
							<li class="treeview"> 
								<a onclick="thongtingiangvien()">Thông tin giảng viên</a>
							</li>

							
						
							<li class="treeview"> 
								<a onclick="doandatotnghiep()" >Đồ án đã tốt nghiệp</a>
							</li>
							
						</ul>
					</li>


					<li class="treeview"> 
						<a onclick="doimatkhau()">
							<span>Đổi mật khẩu</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	<!--End Left-->
	</div>
</div>
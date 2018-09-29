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

					<li class=""> 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Quản lí đồ án sinh viên</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="xacnhandangki()">Xác nhận đăng kí của sinh viên</a>
							</li>

							<li class="treeview"> 
								<a onclick="detaisinhvien()">Đề tài sinh viên </a>
							</li>

							<li class="treeview"> 
								<a onclick="lichsudangkihuongdan()">Lịch sử đăng kí </a>
							</li>
						</ul>

							
					<li class=""> 
						<a >
							<img class="fa" src="images/lg.sandglass-time-loading-gif.gif">
							<span onclick="doandanghuongdan()">Nhận xét đồ án đang hướng dẫn</span>
						</a>
					</li>		
						
					
					<li class=""> 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Phản biện đồ án</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="doanphanbien()">Đồ án đang phản biện</a>
							</li>

							<li class="treeview"> 
								<a onclick="xinykienkhoa()">Xin ý kiến của khoa</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="denghikhoadetai()">Đề nghị khóa đề tài</a>
							</li>
						</ul>
					</li>



				
					<li class=""> 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Tài nguyên cá nhân</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="huongnghiencuu()">Hướng nghiên cứu</a>
							</li>

							<li class="treeview"> 
								<a onclick="doantunghuongdan()">Đồ án đã từng hướng dẫn</a>
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
		
	</div>
</div>


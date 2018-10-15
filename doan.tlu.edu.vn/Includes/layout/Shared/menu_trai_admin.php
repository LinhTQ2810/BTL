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
					<li class="header">CHỨC NĂNG QUẢN LÝ</li>

					<li > 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Quản lý đồ án</span>
							<i class="fa fa-angle-left pull-right"></i>
							
						</a>
							
						<ul class="treeview-menu" style="display: none;">

							<li class="treeview"> 
								<a onclick="datthoigian()">Cài đặt thời gian đợt đồ án</a>
							</li>		
								
							<li class="treeview"> 
								<a onclick="doandangthuchien()">Đồ án đang thực hiện</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="doandahoanthanh()">Đồ án đã hoàn thành</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="huydoan()">Hủy đồ án</a>
							</li>
						</ul>

					</li>			

					<li > 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Quản lý sinh viên</span>
							<i class="fa fa-angle-left pull-right"></i>
							
						</a>
							
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="thongtinsinhvien()">Sinh viên đang thực hiện đồ án</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="thaotacsinhvien()">Các thao tác với tài khoản sinh viên</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="ytuongsinhvien()">Các ý tưởng của sinh viên</a>
							</li>

							
						</ul>
						
					</li>			
						
					<li > 
						<a>
							<i class="fa fa-laptop"></i>
							<span>Quản lý giảng viên</span>
							<i class="fa fa-angle-left pull-right"></i>
							
						</a>
							
						<ul class="treeview-menu" style="display: none;">
							<li class="treeview"> 
								<a onclick="thongtingiangvien()">Giảng viên đang hướng dẫn đồ án</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="thaotacgiangvien()">Các thao tác với tài khoản giảng viên</a>
							</li>
							
							<li class="treeview"> 
								<a onclick="nghiencuugiangvien()">Các nghiên cứu của giảng viên</a>
							</li>

							
						</ul>
						
					</li>			


					<li class="treeview"> 
						<a onclick="xuatbaocao()">
							<span>Xuất báo các nghiệp vụ</span>
						</a>
					</li>

					<li class="treeview"> 
						<a onclick="thanhlaphoidong()">
							<span>Thành lập hội đồng phản biện</span>
						</a>
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
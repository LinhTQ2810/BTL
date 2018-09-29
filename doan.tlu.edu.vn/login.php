<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<HTML>
  <HEAD>
		<title>.: Đăng nhập :.</title>
<LINK href="Includes/Default.css" type=text/css rel=stylesheet >
  </HEAD>
<body leftMargin=5 topMargin=0 onload=PageLoad(); rightMargin=5>
<form method="post" action="" id="Form1">
<div id="headerright">
	<div id="header">
		<div style="POSITION: absolute;FONT-FAMILY: -webkit-body;COLOR: white;FONT-SIZE: 18px;TOP: 32px;FONT-WEIGHT: bold;LEFT: 8px">
			<span id="PageHeader1_lblWebtitle">HỆ THỐNG QUẢN LÍ ĐỒ ÁN TỐT NGHIỆP KHOA CNTT - ĐẠI HỌC THỦY LỢI</span>
		</div>

		<span id="navbar"><a href="index.php" >Trang chủ</a> |
			<a id="PageHeader1_SignOut_ibnLogout" href="" style="color:White;">Đăng nhập</a>

			| <a href="" >Hỏi đáp</a> | <a href="" >
				Trợ giúp</a>
		</span>

		<DIV id="box_size">
			<SPAN id="ur" style="FONT-SIZE: 14px; FONT-WEIGHT: bold"></SPAN></DIV>
		<DIV id="box_user">
			<div id="PageHeader1_Panel1" style="width:400px;TEXT-ALIGN: right; MARGIN-TOP: 2px">
				<P>
					<span id="PageHeader1_lblUserFullName" style="color:Blue;font-size:10px;font-weight:bold;">Khách</span>
					<span id="PageHeader1_lblRoleTitle"></span>
					<span id="PageHeader1_lblUserRole" style="color:Blue;font-size:10px;"></span>
					
				</P></div>
			</DIV>
	</div>
</div>

<table id=tblMain height="70%" width="100%" align=center border=0>
  <tr>
    <td vAlign=middle align=center>
      <div style="WIDTH: auto" align=center><div id="pnlLogin" style="height:200px;width:70%;">
	
      <TABLE id=boxlogin-t>
        <TR>
          <TD></TD>
      	</TR>
      </TABLE>

      <TABLE class=tableborderLogin style="MARGIN-TOP: 0px !important"height=100 cellSpacing=0 cellPadding=0 width=487 border=0>
        <TR>
          <TD vAlign=middle align=center>
            <TABLE id=Table2 cellSpacing=1 cellPadding=0 border=0>
              <TR>
                <TD class=labelheader align=right>Tài khoản&nbsp;:</TD>
                <TD>
					<input name="txtUserName" type="text" id="txtUserName" /></TD></TR>
              <TR>
                <TD class=labelheader align=right>Mật khấu :</TD>
                <TD>
					<input name="txtPassword" type="password" id="txtPassword" /></TD></TR>
              <TR>
                <TD class=labelheader align=right>
					<input type="submit" name="btnSubmit" value="Đăng nhập" id="btnSubmit" />&nbsp;</TD>
                <TD>&nbsp;<INPUT onclick=GoHome(); type=button value="Về trang chủ"></TD></TR>
              <TR>
                <TD class=labelheader colSpan=2 align=center>
					<span id="lblErrorInfo" style="color:Red;"></span></TD>
			  </TR>
              <TR>
                <TD class=labelheader colSpan=2 align=center><A 
                  href="#">[ Quên mật khẩu 
            ]</A></TD></TR>
      			</TABLE>
  			</TD>
  		</TR>
      </TABLE>

      <TABLE id=boxlogin-b style="MARGIN-TOP: 0px !important">
        <TR>
          <TD></TD></TR></TABLE>
	     </div></div>
      
		</td></tr>
	  </table>

<div style="float:left;margin-top:60px;width:100%">
<div id="footer_1" align="left">
	<h4 id="hotline">Ðường dây nóng<br>
		<span id="PageFooter1_lblHotline">04.38521441</span>
	</h4>
	<h4 style="FONT-SIZE:12px;right:11px;POSITION:absolute;TOP:20px">
		<a style="color:White;">Trang chủ</a>
		|
		<a style="color:White;">Đăng nhập</a>
		| <A style="COLOR:white">Hỏi đáp</A>
		| <A style="COLOR:white">Trợ giúp</A>
	</h4>
</div>

</form>
<script>
        
		function GoHome(){
			window.location.href = "index.php";
		}
		
		function PageLoad(){
			if(document.getElementById("txtUserName"))
				document.getElementById("txtUserName").focus();
			else if(document.getElementById("txtOldPassword"))
				document.getElementById("txtOldPassword").focus();
		}
		
</script>
	</body>
</HTML>

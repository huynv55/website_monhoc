<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>quản lý môn học</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php
	//session_start();
    ob_start();
	require_once("connect.php"); 
	?>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.php">Quản lý</a>
			</div>
			<ul id="navigation">
				<li >
					<a href="index.php">Trang chủ</a>
				</li>
				<li>
					<?php echo "<a href='object.php?ip_mh=$_GET[ip_mh]'>Lớp môn học</a>";?>
				</li>
				<li class="active">
					<?php echo "<a href='news.php?ip_mh=$_GET[ip_mh]'>Điểm danh</a>";?>
				</li>
				<li >
					<?php echo "<a href='points.php?ip_mh=$_GET[ip_mh]'>Quản lý điểm</a>";?>
				</li>
				<li>
					<?php echo "<a href='contact.php?ip_mh=$_GET[ip_mh]'> Thống kê</a>";?>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="about">
			<h1> ĐIỂM DANH CUỐI GIỜ </h1>
			<h2> tích vào những sinh viên vắng mặt</h2>
			<form method="post" <?php echo "action='end_dd0.php?ip_mh=$_GET[ip_mh]'";?> id="end_dd"> 
				<table>
                <tr> <td><label> ngày : </label></td>
                <td><input type="date" name="date" id="date"> </input></td>
                </tr>
				<tr>
                	<td><input type="submit" value="hoàn thành" class="more"/> </td> 
					 <td><input type="reset" value="lại" class="more"/> </td>
                     </tr>
				</table>
			<table border="1" align="left" bordercolor="#000000"  id="table">
					<tr>
						<td><strong> Mã sinh viên</strong></td>
						<td><strong> Tên </strong></td>
						<td><strong> Lớp </strong></td>
						<td><strong> Ngày sinh </strong></td>
						<td><strong> Giới tính</strong></td>
						<td><strong> vắng mặt &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
						</tr>

					<?php
					
						$sql="select * from  sinhvien where Malop='$_GET[ip_mh]'";
						$query=mysql_query($sql);
						
							 while($row=mysql_fetch_array($query))
								{
									echo "<tr>
											<td>$row[Masinhvien]</td>
											<td>$row[Ten]</td>
											<td>$row[Lop]</td>
											<td>$row[Ngaysinh]</td>										
											<td>$row[sex]</td>
											<td><input type='checkbox' name='check[]' value='".$row[Masinhvien]."'/>  </td>
											</tr>";
								}
					?>
				</table>
				

			</form>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>
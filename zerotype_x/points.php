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
				<li>
					<?php echo "<a href='news.php?ip_mh=$_GET[ip_mh]'>Điểm danh</a>";?>
				</li>
				<li class="active">
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
        <h1> TRANG QUẢN LÝ ĐIỂM </h1>
        <div>
        <?php
        
		$sql2="select * from  hesodiem where Malop='$_GET[ip_mh]'";
		$query2=mysql_query($sql2);
		$check=mysql_num_rows($query2);
		if( $check == "0") {
			echo "<h2> chưa thiết lập biểu điểm lớp môn học này </h2>";
			echo "<a class='more' href='hesodiem.php?ip_mh=$_GET[ip_mh]'> thiết lập </a><br><br>";
			}
			else{
				$total = "0";
				while($row=mysql_fetch_array($query2)){
					$total = $total + $row['heso'];
				}
				if($total != "100") {
					echo "<p> biểu điểm chưa hoàn thành</p>";
					echo "<a class='more' href='hesodiem.php?ip_mh=$_GET[ip_mh]'> thiết lập </a><br><br>";
					} 
			}
			?>
		
        </div>
        
			<div class="left">
            <table border="1" align="left" bordercolor="#000000"  id="table">
					<tr>
						<td><strong> Mã sinh viên &nbsp;&nbsp;&nbsp;</strong></td>
						<td><strong> Tên </strong></td>
                        <td><strong> Lớp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</strong> </td>
						<td><strong>quản lý điểm&nbsp;&nbsp;&nbsp;</strong></td>
						</tr>
            <?php 
			$sql3="select * from  sinhvien where Malop='$_GET[ip_mh]'";
						$query3=mysql_query($sql3);
						
							 while($row=mysql_fetch_array($query3))
								{
									echo "<tr>
											<td>$row[Masinhvien]</td>
											<td>$row[Ten]</td>
											<td>$row[Lop]</td>";
									if( $row[Masinhvien] == $_GET[ip_sinhvien] )
										echo "<td> </td>";
									else
										echo "<td> <a href='points.php?ip_sinhvien=$row[Masinhvien]&ip_mh=$_GET[ip_mh]'><image src='images/images_points.jpg'></a></td>";
										echo	"</tr>";
								}
			?>
            </table>
            </div>
			  
		

			<div class="right">
				<?php

					if(isset($_GET[ip_sinhvien])) include("diemsinhvien.php");
				?>
            
            
				
			</div>
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
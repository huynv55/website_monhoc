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

        <div class="right">
        	<table border="1" align="left" bordercolor="#000000" id="table">
        		<tr>
					<td> <strong>thành phần</strong></td>
					<td> <strong>hệ số điểm </strong></td>
				</tr>

        		<?php
        			$sql="select * from  hesodiem where Malop='$_GET[ip_mh]'";
					$query=mysql_query($sql);
					$total = "0";
						while($row=mysql_fetch_array($query)){
					
							echo "<tr>";
							echo "<td> $row[thanhphan] </td>";
							echo "<td> $row[heso] %</td>";
							echo "</tr>";
					
							$total = $total + $row['heso'];
						}

				?>
			</table>
		</div>
		
			<?php
			  if($total == "100") {
			  		echo "<h3> biểu điểm đã hoàn thành : $total %</h3>";
			  		echo "<a href='points.php?ip_mh=$_GET[ip_mh]' class='more'> xác nhận</a> &nbsp;&nbsp;";
			  		echo "<a href='xoahesodiem.php?ip_mh=$_GET[ip_mh]' class='more'>làm lại <a>";
			  	}
			  	else {
			  		echo "<h3> biểu điểm chưa hoàn thiện - tổng hệ số : $total % </h3>";
			  		echo "<p> tiếp tục hoàn thiện hoặc thiết lập lại</p>";
			  		echo "<a href='xoahesodiem.php?ip_mh=$_GET[ip_mh]' class='more'>làm lại <a>";
			  	} 
			?>
		<hr>

       <form <?php echo "action='themhesodiem.php?ip_mh=$_GET[ip_mh]'";?> method="post">
       	<table>
						<tr>
						<td> thành phần</td>
						<td> hệ số điểm </td>
						</tr>
						<tr>
						<td> <input type="text" name="thanhphan" id="thanhphan"/></td>
						<td> <input type="number" name="heso" id="heso"/> </td>
						</tr>

					</table>
					<p>
                            <input type="submit" id="submit" name="submit" class="more" value="Thêm" />
                            <input type="reset" id="reset" name="reset" class="more" value="nhập lại" />                                
                     </p>

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
				<li class="active">
					<?php echo "<a href='object.php?ip_mh=$_GET[ip_mh]'>Lớp môn học</a>";?>
				</li>
				
			</ul>
		</div>
	</div>
	
	
	<div id="contents">
		<div id="tagline" class="clearfix">
			
			
			<div>
            <p>Thông tin lớp môn học : <?php echo "<a href='object.php?ip_mh=$_GET[ip_mh]' class='more'>$_GET[ip_mh] </a>"; ?></p>
				
				<table border="1" id="table">
					<?php
					
						$sql="select * from  monhoc where Malop='$_GET[ip_mh]'";
						$query=mysql_query($sql);
						
							 while($row=mysql_fetch_array($query))
								{
									echo "<tr>
											<td>Tên môn học</td>
											<td><b>$row[Ten]</b></td>
											</tr>

											<tr>
											<td>số tín chỉ</td>
											<td><b>$row[sotinchi]</b></td>
											</tr>

											<tr>
											<td>số lượng sin viên max</td>
											<td><b>$row[soluongsinhvien]</b></td>
											</tr>

											<tr>
											<td>số lượng sinh viên đang tham gia</td>
											<td><b>$row[slsvthamgia]</b></td>
											</tr>

											<tr>
											<td>lịch giảng dạy</td>
											<td><b>$row[lichday]</b></td>
											</tr>

											<tr>
											<td>thời gian</td>
											<td><b>$row[begin_date] &rarr; $row[end_date] </b></td>
											</tr>";
								}
					?>

				</table>
                <img src="images/recycle.png" alt="Img">
			</div>
			<div>
				<p> <strong>sửa thông tin</strong></p>
				<form method="post" <?php echo "action='sualopmonhoc_0.php?ip_mh=$_GET[ip_mh]'"; ?> id="taolopmonhoc">
                <table border="1" id="table">
					<tr>
						<td><lable> Mã lớp môn học : </lable></td>
						<td><input id="Malop" name="Malop" type="text"  /></td>
					</tr>
					<tr>
						<td><lable> Tên lớp môn học : </lable></td>
						<td><input id="Ten" name="Ten" type="text"  /></td>
					</tr>
					
					<tr>
						<td><lable> số lượng sinh viên : </lable></td>
						<td><input id="soluongsinhvien" name="soluongsinhvien" type="number"  /></td>
					</tr>
					<tr>
						<td><lable> số tín chỉ : </lable></td>
						<td><input id="sotinchi" name="sotinchi" type="number"  /></td>
					</tr>
					<tr>
						<td><lable> lịch giảng dạy : </lable></td>
						<td><input id="lichday" name="lichday" type="text"  /></td>
					</tr>
					<tr>
						<td><lable> Ngày bắt đầu : </lable></td>
						<td><input id="begin_date" name="begin_date" type="date"  /></td>
					</tr>
					<tr>
						<td><lable> Ngày kết thúc : </lable></td>
						<td><input id="end_date" name="end_date" type="date"  /></td>
					<tr>
                     </table>
					<p>
                            <input type="submit" id="submit" name="submit" class="more" value="xác nhận" />
                            <input type="reset" id="reset" name="reset" class="more" value="nhập lại" />                                
                     </p>
                    
				</form>
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
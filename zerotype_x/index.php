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
				<li class="active">
					<a href="index.php">Trang chủ</a>
				</li>
				<li>
					<a href="object.php">Lớp môn học</a>
				</li>
				
			</ul>
		</div>
	</div>
	
	<div id="adbox">
		<div class="clearfix">
			<img src="images/box.png" alt="Img" height="342" width="368">
			<div>
				<h1>welcome!</h1>
				<h2>bạn sẵn sàng chưa?</h2>
				<p>
					website này cung cấp các chức năng quản lý lớp môn học mà bạn giảng dạy!
					<span><a href="index.php#contents" class="btn">bắt đầu nào!</a><b></b></span>
				</p>
			</div>
		</div>
	</div>
	
	<div id="contents">
		<div id="tagline" class="clearfix">
			<h1>Danh sách các lớp đang giảng dạy</h1>
			<div>
				<?php
						$sql="select Malop from  monhoc";
						$query=mysql_query($sql);
						
							 while($row=mysql_fetch_array($query))
								{
									echo "<h2> <a href='object.php?ip_mh=$row[Malop]' class='btn'>$row[Malop] </a></h2>";
								}
				?>
				
			</div>
			<div>
				<form method="post" action="taolopmonhoc.php" id="taolopmonhoc">
					<table id="table">
					<tr>
						<td><lable> Mã lớp môn học : </lable></td>
						<td><input id="Malop" name="Malop" type="text"  /></td>
					</tr>
					<tr>
						<td><lable> Tên lớp môn học : </lable></td>
						<td><input id="Ten" name="Ten" type="text"  /></td>
					</tr>
					
					<tr>
						<td><lable> Số lượng sinh viên : </lable></td>
						<td><input id="soluongsinhvien" name="soluongsinhvien" type="number"  /></td>
					</tr>
					<tr>
						<td><lable> Số tín chỉ : </lable></td>
						<td><input id="sotinchi" name="sotinchi" type="number"  /></td>
					</tr>
					<tr>
						<td><lable> Lịch giảng dạy : </lable></td>
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
                     <br />
					<p>
                            <input type="submit" id="submit" name="submit" class="more" value="Tạo mới" />
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
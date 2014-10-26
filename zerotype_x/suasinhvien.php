<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý môn học</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<form method="post" <?php echo "action='suasinhvien_0.php?ip_mh=$_GET[ip_mh]&ip_sinhvien=$_GET[ip_sinhvien]'";?> id="suasinhvien">
					
					<table>
						<tr>
						<td> Mã sinh viên</td>
						<td> Tên </td>
						<td> Lớp </td>
						<td> Ngày sinh </td>
						<td> Giới tính</td>
						</tr>
						<tr>
						<td> <input type="text" name="Masinhvien" id="Masinhvien"/></td>
						<td> <input type="text" name="Ten" id="Ten"/> </td>
						<td> <input type="text" name="Lop" id="Lop"/> </td>
						<td> <input type="date" name="ngaysinh" id="ngaysinh"/> </td>
						<td> <select name="sex" id="sex">
                        		<option selected> Nam </option>
                                <option> Nữ </option>
                        	</select></td>
						</tr>

					</table>
					<input type="submit" value="xác nhận" class="btn"/>
					<input type="reset" value="nhập lại" class="btn"/>
				</form>
</body>
</html>
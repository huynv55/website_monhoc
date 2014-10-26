
<?php
// show diem tổng kết
$query_tongket=mysql_query("SELECT * FROM sinhvien WHERE MaLop = '$_GET[ip_mh]' AND Masinhvien = '$_GET[ip_sinhvien]'");
		while($row_tongket=mysql_fetch_array($query_tongket)) {
			echo "<p> điểm tổng kết : $row_tongket[tongket]</p>";
		}
		if(isset($_GET[check])) echo "<p> có sự thay đổi trong điểm của sinh viên cần<a href='points.php?ip_sinhvien=$_GET[ip_sinhvien]&ip_mh=$_GET[ip_mh]'> tính lại </a> điểm tổng kết</p>";
?>


<table border="1" align="left" bordercolor="#000000" id="table">
	<tr>
		<td> thành phần </td>
		<td> hệ số </td>
		<td> điểm</td>
		<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	
		<?php
		$queryheso = mysql_query("SELECT * FROM hesodiem WHERE MaLop = '$_GET[ip_mh]'");
		$tongket = 0.0;
		while($row=mysql_fetch_array($queryheso)){

			$myquery = mysql_query("SELECT `diem`.`id_diem`, `hesodiem`.`thanhphan`, `hesodiem`.`heso`, `diem`.`diemso` FROM `hesodiem` JOIN `diem` ON `hesodiem`.`thanhphan` = `diem`.`thanhphan` 
			WHERE CONVERT(`hesodiem`.`MaLop` USING utf8) = '$_GET[ip_mh]'
			AND CONVERT(`diem`.`Masinhvien` USING utf8) = '$_GET[ip_sinhvien]'
			AND `hesodiem`.`heso` = '$row[heso]'");

			$t = mysql_num_rows($myquery);
			$h = 0.0;
			while($rows=mysql_fetch_array($myquery)){
			//$ip_diem=$rows[ip_diem] + 1;
				$h = $h + ($rows[diemso]*$rows[heso]/100);


			echo "<tr>";
			echo "<td> $rows[thanhphan] </td>";
			echo "<td> $rows[heso] %</td>";
			echo "<td> $rows[diemso] </td>";
			echo "<td> <a href='xoadiem.php?ip_sinhvien=$_GET[ip_sinhvien]&ip_mh=$_GET[ip_mh]&ip_diem=$rows[id_diem]' > xóa </a> </td>";
			echo "</tr>";

			

			}

			$tongket = $tongket + ($h/$t); 
			$a = mysql_query("UPDATE `quanlymonhoc`.`sinhvien` SET `tongket` = '".$tongket."' WHERE `sinhvien`.`Masinhvien` = '$_GET[ip_sinhvien]' AND `sinhvien`.`MaLop` = '$_GET[ip_mh]'");

		}
		

		

		$myquery1 = mysql_query("SELECT `diem`.`id_diem`, `hesodiem`.`thanhphan`, `hesodiem`.`heso`, `diem`.`diemso` FROM `hesodiem` JOIN `diem` ON `hesodiem`.`thanhphan` = `diem`.`thanhphan` 
			WHERE CONVERT(`hesodiem`.`MaLop` USING utf8) = '$_GET[ip_mh]' AND CONVERT(`diem`.`Masinhvien` USING utf8) = '$_GET[ip_sinhvien]'
			ORDER BY `hesodiem`.`heso`");
			$ip_diem=mysql_num_rows($myquery1);
		?>
	
</table>

<form method="post" <?php echo "action='taodiem.php?ip_sinhvien=$_GET[ip_sinhvien]&ip_mh=$_GET[ip_mh]&ip_diem=$ip_diem' ";?> >
	<h2> <b>cho điểm mới</b></h2>
	<table border="1" align="left" bordercolor="#000000" id="table">
		<tr>
			<td> <b>thành phần điểm </b></td>
			<td> <b>điểm số</b> </td>
		</tr>
		<tr>
			<td> <select name="thanhphan">
				<?php
				$hesoquery=mysql_query("SELECT `thanhphan` FROM `hesodiem` WHERE CONVERT(`hesodiem`.`MaLop` USING utf8) = '$_GET[ip_mh]'");
				while($rowheso=mysql_fetch_array($hesoquery)){
						echo "<option> $rowheso[thanhphan] </option>";
					}
				?>
			</select></td>
			<td> <input type="number" name="diemso" min="0" max="10" /> </td> 
		</tr>
		<tr>
		<td colspan="2"><input type="submit" id="submit" name="submit"  value="xác nhận" /> 
        <input type="reset" id="reset" name="reset"  value="nhập lại" /></td>
	</tr>
	</table>
	
</form>

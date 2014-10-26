
<?php
$db_host="localhost";
$db_usename="root";
$db_password="";
$db_name="quanlymonhoc";

mysql_connect($db_host,$db_usename,$db_password) or die ("khong the ket noi database");
mysql_select_db($db_name) or die ("khong the chon database");
mysql_query("SET NAMES utf8");
?>
<?php
$db_host="localhost";
$db_usename="root";
$db_password="";
$db_name="quanlymonhoc";

mysql_connect($db_host,$db_usename,$db_password) or die ("khong the ket noi database");
mysql_select_db($db_name) or die ("khong the chon database");
mysql_query("SET NAMES utf8");

/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
      die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                                           ->setLastModifiedBy("Maarten Balliauw")
                                           ->setTitle("Office 2007 XLSX Test Document")
                                           ->setSubject("Office 2007 XLSX Test Document")
                                           ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
                                           ->setKeywords("office 2007 openxml php")
                                           ->setCategory("Test result file");


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Môn học :')
            ->setCellValue('A2', 'Mã Lớp')
            ->setCellValue('A3', 'số tín chỉ')
            ->setCellValue('A4', 'số lượng sinh viên')
            ->setCellValue('A5', 'Lịch dạy')
            ->setCellValue('B7', 'Bảng điểm tổng kết');

// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0);
$query = mysql_query("SELECT * FROM monhoc WHERE MaLop='$_GET[ip_mh]'");
               while($row=mysql_fetch_array($query)){
$objPHPExcel->getActiveSheet()->setCellValue('B1', $row['Ten']);
$objPHPExcel->getActiveSheet()->setCellValue('B2', $row['MaLop']);
$objPHPExcel->getActiveSheet()->setCellValue('B3', $row['sotinchi']);
$objPHPExcel->getActiveSheet()->setCellValue('B4', $row['slsvthamgia']);
$objPHPExcel->getActiveSheet()->setCellValue('B5', $row['lichday']);

        }
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B9', 'Mã sinh viên')
            ->setCellValue('C9', 'Họ và tên')
            ->setCellValue('D9', 'Lớp')
            ->setCellValue('E9', 'Ngày sinh')
            ->setCellValue('F9', 'điểm tổng kết');
            $query2 = mysql_query("SELECT * FROM sinhvien WHERE MaLop='$_GET[ip_mh]'");
            $count = 9;
               while($row2=mysql_fetch_array($query2)){
                  $count++;
$objPHPExcel->getActiveSheet()->setCellValue('B'.$count, $row2['Masinhvien']);
$objPHPExcel->getActiveSheet()->setCellValue('C'.$count, $row2['Ten']);
$objPHPExcel->getActiveSheet()->setCellValue('D'.$count, $row2['Lop']);
$objPHPExcel->getActiveSheet()->setCellValue('E'.$count, $row2['Ngaysinh']);
$objPHPExcel->getActiveSheet()->setCellValue('F'.$count, $row2['tongket']);

        }

        $objPHPExcel->getActiveSheet()->getStyle('B1:B5')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B9:G9')->getFont()->setBold(true);
// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('bangdiem');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bangdiem.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
// header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
// header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
// header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
// header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

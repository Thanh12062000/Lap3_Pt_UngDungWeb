<?php 

	$TenSP=$_GET["TenSP"];
	$Loai=$_GET["Loai"];
	$Gia=$_GET["Gia"];
	$LinkImage=$_GET["LinkImage"];
	$LinkSP=$_GET["LinkSP"];

	include("data_access_helper.php");
	$db=new DataAccessHelper();
	$db->connect();
	$db->executeNonQuery("INSERT INTO Product(ProductName,RegularPrice,SalePrice,CategoryName,ImageLink,ProductLink) VALUES ('$TenSP','$Gia','$Gia','Test','$LinkImage','$LinkSP')");
	$db->close();
	echo "Đã tạo mới thêm một tin: "."<br> ".
		" +>Tên sản phẩm:   ". $TenSP."<br> ".
		" +>Loại sản phẩm:   ". $Loai ."<br> ".
		" +>Giá sản phẩm:   ".$Gia."<br> ".
		" +>Giá Sale:   ".$Gia."<br> ".
		" +>Link sản phẩm:  ". $LinkSP."<br> ".
		" +>Link hình ảnh:   ". $LinkImage;"<br> ";
 ?>


 
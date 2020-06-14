<?php 
	$TenSP=$_GET["TenSP"];
	$Loai=$_GET["Loai"];
	$Gia=$_GET["Gia"];
	$LinkImage=$_GET["LinkImage"];
	$LinkSP=$_GET["LinkSP"];


	include("data_access_helper.php");
	$db=new DataAccessHelper();
	$db->connect();
	$sql = "UPDATE product SET ProductName='$TenSP',RegularPrice=$Gia,SalePrice=$Gia,CategoryName='$Loai',ImageLink='$LinkImage',ProductLink='$LinkSP' WHERE ProductName='$TenSP'";
     
    // Thực thi câu truy vấn và gán vào $result
    $result = $db->executeQuery($sql);

	$db->close();

	echo "Đã chỉnh sửa một tin: "."<br> ".
		" +>Tên sản phẩm:   ". $TenSP."<br> ".
		" +>Loại sản phẩm:   ". $Loai ."<br> ".
		" +>Giá sản phẩm:   ".$Gia."<br> ".
		" +>Giá Sale:   ".$Gia."<br> ".
		" +>Link sản phẩm:  ". $LinkSP."<br> ".
		" +>Link hình ảnh:   ". $LinkImage;"<br> ";
 ?>




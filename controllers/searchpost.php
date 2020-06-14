
<?php 
 
    $keyword=$_GET["keyword"];
    include("data_access_helper.php");
    $db=new DataAccessHelper();
    $db->connect();
    // Câu SQL lấy danh sách
    $sql = "SELECT * FROM Product WHERE ProductName LIKE '%" . $keyword . "%' LIMIT 12;";

    $result = $db->executeQuery($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
           echo "Name: " . $row["ProductName"]. " - RegularPrice: " . $row["RegularPrice"]. "<br>";
        }
    } 
    else {
        echo "Không có record nào";
    }
    echo "Lấy dữ liệu thành công";

    $db->close();
?>  




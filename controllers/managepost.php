<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/src/css/test.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DealCongNghe.Com</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost:8080/src/css/bootstrap.min.css" >
    <!-- FontAwsome -->
    <link rel="stylesheet" href="http://localhost:8080/src/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
    <style>
      body {
        font-family: 'Roboto';
      }

      #left-sidebar, #main-content {
        height: 500px;
        border: 1px solid red;
        margin-bottom: 50px;
      }

      #footer {        
        text-align: center;
      }
    </style>

</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#navbar-collapse"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">DealCongNghe.Com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Sản Phẩm</a></li>
            <li><a href="#">About Us</a></li>            
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="createpost.html">Đăng Tin</a></li>
            <!-- <li><a href="#">Đăng Ký</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="managepost.html">Quản Lý Tin Đăng</a></li>
            <!-- <li><a href="#">Đăng Ký</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <!-- Place your code at here! -->
    <div id="main">     
      <div class="container">
    
    <h2>Quản lý tin đăng</h2>
        
    

        
        <br/>        
      </div>
    </div>
  <?php 
      include("data_access_helper.php");
      $db=new DataAccessHelper();
      $db->connect();
      // Câu SQL lấy danh sách
      $sql = "SELECT * FROM Product ;";
     
    // Thực thi câu truy vấn và gán vào $result
      $result = $db->executeQuery($sql);     
    ?>
    <div>
        <?php 
        echo "<table id=table >";
        echo "<tr>";
        echo    "<th>ID</th>
                <th>ProductName</th>
                <th>Gia</th>
                <th>LoaiSP</th>
                <th>LinkSP</th>
                <th>LinkImage</th>";
        echo "</tr>";
         while ($row = $result->fetch_assoc()){
            echo "<tr>";

            echo   "<td> " . $row["ID"]. "</td>
                    <td> " . $row["ProductName"]. "</td>
                    <td> " . $row["RegularPrice"]. "</td>
                    <td> " . $row["CategoryName"]. "</td>
                    <td> " . $row["ProductLink"]. "</td>
                    <td> " . $row["ImageLink"]. "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $db->close();
        ?>
    </div>

    <!-- Footer -->
    <div id="footer">
      <div class="container">
        <p>All rights reserved by DealCongNghe.Com</p>
      </div>
    </div>

    <!-- DO NOT REMOVE THE 2 LINES -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <h1>PRODUCT: </h1>
    
  
 

</body>
</html>


 
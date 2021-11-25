<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Quản Lý web bán túi xách</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<div>
  <nav class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="container-fluid">
        <div class="navbar-header active">
        <a class="navbar-brand " href="../../?controllers=back" >Home</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="../index.php">Quản lí tài khoản</a></li>
          <li><a href="./Display.php">Quản lý thông tin các sản phẩm </a></li>
          <li ><a href="./Design.php">Thêm sản phẩm</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="/action_page.php" >
          <div class="input-group">
            
           
            
          </div>
		
        </form>
      </div>
     </nav>
	 <br></br><br></br>

	<div class="container">
  <div class="panel panel-default">
            <div class="panel-body">
            <?php 
            echo '<form class="navbar-form navbar-left" method="post">
            <div class="input-group">
            <input 
               type="text" 
               class="form-control" 
               placeholder="Search= MaTour " 
               name="search" >
               <div class="input-group-btn"  >
               <button name ="add" type="submit" class="btn btn-default">
               <i class="glyphicon glyphicon-search" ></i></button>
            <a  href="Display.php" class="btn btn-default" type="button" >
            <i  class="glyphicon glyphicon-repeat"></i>
            </a>
            </div>
            </div>
          </div>
        </form>
	 <table class="table align-middle" >
        <thead>
          <tr>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col">Cập nhật</th>
            <th scope="col">Hủy</th>
          </tr>
        </thead>
        <tbody>';
	
    	$conn = mysqli_connect('localhost','root','','thegioituixach') or die('connect failed');
    	mysqli_query($conn,'SET NAMES UTF8');
			if(isset($_POST['add']))
      { $h1=$_POST['search'];
        $sql = "SELECT * FROM caphocsinhtomi where id = '$h1' ";
        $result = mysqli_query($conn,$sql);}
      else
      {$sql = "SELECT * FROM caphocsinhtomi ";
			 $result = mysqli_query($conn,$sql);}
		 ?>
		<?php while($row = mysqli_fetch_array($result)): ?>
		 <tr>
          <th scope="row"><?php echo $row['id']?></th>
          <td><?php echo $row['ten']?></td>
          <td><?php echo $row['gia']?>VND</td>
          <!-- <td><img src="./Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Lake Blue.webp">111</td> -->
          
        
          <td>
            <a href='update.php/?id="<?php echo $row['id']?>"' type="button" class="btn btn-info" > Cập nhật </a>
          </td>
          <td>
		  
		  <a href='delete.php/?id="<?php echo $row['id']?>"' class="btn btn-danger">&nbsp xóa &nbsp</a>
		  




		  
            </td>
          
        </tr>
		 <?php endwhile; ?>
        </tbody>
      </table>
	  
       </div>  
	</div>
  <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
       <div class="navbar navbar-inverse ">
            <div class="container">
              <p class="navbar-text center">@Made by Nhóm 5 - Tin12A1HN - uneti</p>
            </div>
       </div> 
  </div>
   
	</body>
</html>











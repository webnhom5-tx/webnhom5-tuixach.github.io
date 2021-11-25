<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./Views/web.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Quản Lý web bán túi xách</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<div>
    <table class="bhd" >
           <tr >
            <td >
	       
            <a class="RTC mg fcl" href="./?controllers=back&&id=''" style="text-decoration: none">← Quay lại Home</a>
                <span class="right" style="margin-left: 67%;">
                    <a class="fcl bd" href="" style="text-decoration: none">Danh sách SP đã đặt</a> &nbsp
                    <a class="fcl bd" href="./" style="text-decoration: none"><?php echo $_GET['id']?>(Log Out)</a> &nbsp
                </span>
            </td>
           </tr>
       </table>
	 <br></br>

	<div class="container">
  <div class="panel panel-default">
            <div class="panel-body">
            <?php 
            echo '<form class="navbar-form navbar-left" method="post">
            <div class="input-group">
            <input 
               type="text" 
               class="form-control" 
               placeholder="Search= mã or tên" 
               name="search" >
               <div class="input-group-btn"  >
               <button name ="add" type="submit" class="btn btn-default">
               <i class="glyphicon glyphicon-search" ></i></button>
            <a  href="./?controllers=sale&&id='.$_GET['id'].'" class="btn btn-default" type="button" >
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
            <th scope="col">Giá </th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Hủy</th>
          </tr>
        </thead>
        <tbody>';
        $tk=Null;
        $tk=$_GET['id'];
        if($tk)
        { $conn = mysqli_connect('localhost','root','','thegioituixach') or die('connect failed');
          mysqli_query($conn,'SET NAMES UTF8');
        if(isset($_POST['add']))
          { $h1=$_POST['search'];
            $sql = "SELECT * FROM giohang where  id='$h1' and  username= '$tk'";
            $result = mysqli_query($conn,$sql);}
          else
          {$sql = "SELECT * FROM giohang where username= '$tk' ";
           $result = mysqli_query($conn,$sql);}}
        else
        {$result=NULL;} 
		 ?>
		<?php while($row = mysqli_fetch_array($result)): ?>
		 <tr>
          <th scope="row"><?php echo $row['id']?></th>
          <td><?php echo $row['gia']?>VND</td>
          <td><?php echo $row['ten']?></td>
          <td><img style="width:50px"  src="<?php echo $row['image']?>"></td>
          <td>
		  <?php echo '<a href="./?controllers=delete&&mt='.$row['id'].'&&id='.$tk.'" class="btn btn-danger">&nbsp xóa &nbsp</a>';

		  ?>
            </td>
            <?php endwhile; ?>
        </tr>
        </tbody>
      </table>
	  
       </div>  
	</div>
  <br></br><br></br><br>
  
	</body>
</html>
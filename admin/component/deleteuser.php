<?php
 $Masp= $_GET['id'];
 $conn=mysqli_connect('localhost','root','','thegioituixach') or die ('connect failed');
 
 $sql = "DELETE FROM users Where username = $Masp ";
 $query=mysqli_query($conn,$sql);
 if($query)
 {   $message = "Đã xóa thành công ";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Location:../../index.php');
 }
 else  {echo "lỗi";}
?>
	
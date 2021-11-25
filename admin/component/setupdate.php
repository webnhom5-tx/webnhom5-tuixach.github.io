<?php
 $MaSp= $_GET['id'];
 $h3=$_POST['ten'];
 $h7=$_POST['tomtat'];
$h8=$_POST['image'];
$h9=$_POST['gia'];
 $conn=mysqli_connect('localhost','root','','thegioituixach') or die ('connect failed');
 $sql= "UPDATE caphocsinhtomi SET ngayxp = '$h3',tomtat ='$h7', image ='$h8', gia='$h9'   WHERE id = $MaSp";
 $result= $conn->query($sql);
 if($result)
    {echo "oke"; header('Location:../display.php');}
 else  
 {echo "lỗi";}
 $conn->close();
?>
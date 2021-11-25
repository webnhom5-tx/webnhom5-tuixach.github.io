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
<style>
.top {
  margin: 18%;
  margin-left: 72.5%;
}
</style>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<div>
    
    <table class="bhd" >
           <tr >
            <td >
            <script type="text/javascript">
		    function getBack() {
			history.back();
		    }		
	       </script>	
            <a class="RTC mg fcl" onclick="getBack()" style="text-decoration: none">← Quay lại Home</a>
            <?php
              if($_GET['tk'])
                {echo '<span class="right" style="margin-left: 68%;">
                    <a class="fcl bd" href="./?controllers=sale&&id='.$_GET['tk'].'" style="text-decoration: none">Danh sách tour đã đặt</a> &nbsp
                    <a class="fcl bd" href="./" style="text-decoration: none">'.$_GET['tk'].'(Log Out)</a> &nbsp
                </span>';}
              else
              {echo '<span class="right" style="margin-left: 80%;">
                <a class="fcl bd" style="text-decoration: none" type="submit" href="./?action=login">Đăng Nhập</a>
            </span>';
            }
            ?>
            </td>
           </tr>
       </table>
	 <br>
	 <div class="container">
     <div class="row ">
           <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
       <div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="2500">
           <ol class="carousel-indicators">
               <li data-target="#carousel-id" data-slide-to="0" class=""></li>
               <li data-target="#carousel-id" data-slide-to="1" class=""></li>
               <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
           </ol>
           <div class="carousel-inner">
               <div class="item ">
               <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="First slide" src=""/>
              
               </div>
               <div class="item">
                   <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="" />
               </div>
               <div class="item active">
               <?php echo' <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Third slide" style="height:470px;width:900px" src="'.$categorys[0]['image'].'" />' ?>
               </div>
           </div>
           <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
           <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
       </div>
       <br></br>
       </div>
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 navbar-fixed-bottom top">
       <div class="list-group ">
           <a href="" class="list-group-item active">Thông tin sản phẩm</a>
           <a href="#" class="list-group-item">Tên : <?php echo $categorys[0]['ten'] ?></a>
           <a href="#" class="list-group-item"><?php echo $categorys[0]['gia']  ?>VND</a>
           <a href="#" class="list-group-item"><?php echo $categorys[0]['ten'] ?></a>
          
       </div>
       
       </div>
       </div>
       <br></br><br></br>
       
       <div class="foote-wrap mt-5" style="width: 100%;height: 70px; background-color: rgb(214, 214, 214)">
           <table style="width: 100%;">
            <tr><td></td></tr>
             <tr>
                 <th>
                 <b>Giảng viên hỗ trợ:</b><br>
                    <b>Chủ Nhiệm Đề Tài: Nhóm 5 </b><br>
                    <i>DHTI12A1HN </i></th>
               
            </tr>
           </table>
       </div>
    </div>	 
	</body>

</html>
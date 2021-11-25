<?php
class AddController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $categorys = [];
        $id=$_GET['mt'];
        $usname=$_GET['id'];
        $result= $userModel->chitietsp($id);
        while($row = mysqli_fetch_array($result)):
            $userModel->add($usname,$row['id'],$row['ten'],$row['gia'],$row['image']);
       endwhile;
       $result2= $userModel->display();
       while($row = mysqli_fetch_array($result2)):
        array_push($categorys,['id'=>$row['id'],'image'=>$row['image'],
             'content'=>$row['ten']]);
       endwhile;
       if(isset($_COOKIE["name"])||isset($_COOKIE['level']))
       { return $this->getPath('index',['categorys'=>$categorys],$_COOKIE['name'],$_COOKIE['level']);}
       else
       { return $this->getPath('index',['categorys'=>$categorys],NULL,NULL);}
      
       
    } 
    public function show(){
        echo __METHOD__;
    }
}
?>
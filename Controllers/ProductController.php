<?php
class ProductController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $id=$_GET['id'];
        $categorys = [];
        $result= $userModel->chitietsp($id);
        while($row = mysqli_fetch_array($result)):
            array_push($categorys,['id'=>$row['id'],'image'=>$row['image'],
                'ten'=>$row['ten'],
                'gia'=>$row['gia'],
            ]);
       endwhile;
       $check=NULL;
        return $this->getPath('chitiet',['categorys'=>$categorys],$check,NULL);
    } 
    public function show(){
        echo __METHOD__;
    }
}
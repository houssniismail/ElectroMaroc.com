<?php
class AdminController{
    static public function logincontroller(){
        if(isset($_POST['login'])){
            $data = array(
                'emailAdmin'=>$_POST['email'],
                'passwordAdmin'=>$_POST['password']
            );
            $result = admin::loginAdmin($data);
        }
    }
}
?>
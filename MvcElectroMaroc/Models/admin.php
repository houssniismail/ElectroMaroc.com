<?php
class admin{
    static public function loginAdmin($data){
     $stmt = DataBase::connect()->prepare('SELECT * FROM `admin` WHERE `email` = :email && `password_Admin` = :password');
     $stmt->bindParam(':email',$data['emailAdmin']);
     $stmt->bindParam(':password',$data['passwordAdmin']);
     $stmt->execute();
     $result = $stmt->fetchAll();
    //  var_dump($data);
     if($result){
        $_SESSION['emailAdmin']=$data['emailAdmin'];
        Redirect::to('dashboard');
     }
    }
}
?>
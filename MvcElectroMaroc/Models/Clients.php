<?php
class Clients{
    static public function getAllclients(){
      $stmt = DataBase::connect()->prepare('SELECT * FROM `client`');
      $stmt->execute();
      $stmt->fetchAll();
    }
    static public function loginClients($data){
      $stmt = DataBase::connect()->prepare('SELECT * FROM `client` WHERE `email` = :email && `password_client` = :password');
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':password',$data['password']);
      $stmt->execute();
      $result =  $stmt->fetchAll();
      if($result){
         $_SESSION['email']=$data['email'];
         return $result;
      }else{
         echo "this info not correct";
      }
      
    }
    static public function addClientstodatabase($data){
        $stmt = DataBase::connect()->prepare('INSERT INTO `client`( `nom`, `prenom`, `num_phon`, `adriss`, `ville`, `email`, `password_client`)
         VALUES (:nom, :prenom, :num_phon, :adriss, :ville, :email, :password_client)');
         $stmt->bindParam(':nom',$data['nom']);
         $stmt->bindParam(':prenom',$data['prenom']);
         $stmt->bindParam(':num_phon',$data['Tele']);
         $stmt->bindParam(':adriss',$data['adriss']);
         $stmt->bindParam(':ville',$data['ville']);
         $stmt->bindParam(':email',$data['email']);
         $stmt->bindParam(':password_client',$data['password']);        
         if($stmt->execute()){
            echo "thanks";
         }else{
            echo "oh!!!!";
         }

    }
}
?>
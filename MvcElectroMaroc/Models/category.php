<?php
class category{
    static public function getAllCategory(){
        $stmt = DataBase::connect()->prepare('SELECT * FROM `category`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function addCategor($data){
        $stmt = DataBase::connect()->prepare('INSERT INTO `category`(`nom`, `description`, `image`) VALUES ( :nom, :description, :image)');
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':image',$data['image']);
       if(!$stmt->execute()){
        echo "oh!! category non Ajouter"; 
        die();
       }else{
        echo "category Ajouter";
       
       }
    }
    static public function delete($data){
        $stmt = DataBase::connect()->prepare('DELETE FROM `category` WHERE id =:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->execute();
        
    }
}

?>
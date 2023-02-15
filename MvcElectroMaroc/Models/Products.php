<?php


class Products{
    static public function getAll(){
       $stmt = DataBase::connect()->prepare('SELECT * FROM `products`');
       $stmt->execute();
       return $stmt->fetchAll();

       // pour evier le cas de connection est toujoure ouvert
       $stmt->close();
       
       $stmt = null;
    }
    static public function AddProduct($data){
        $stmt = DataBase::connect()->prepare('INSERT INTO `products`(`reference`, `libelle`, `codeBar`, `prix_achat`, `prix_final`, `prix_ofer`, `description`, `category`,`image`,`name`) 
        VALUES (:value1,:value2,:value3,:value4,:value5,:value6,:value7,:value8,:value9,:value10)');
        $stmt->bindParam(':value1', $data['reference']);
        $stmt->bindParam(':value2',$data['libelle']);
        $stmt->bindParam(':value3',$data['CodeBar']);
        $stmt->bindParam(':value4',$data['prixdAchat']);
        $stmt->bindParam(':value5',$data['prixFinal']);
        $stmt->bindParam(':value6',$data['prixdOfer']);
        $stmt->bindParam(':value7',$data['description']);
        $stmt->bindParam(':value8',$data['for_category']); 
        $stmt->bindParam(':value9',$data['image']);
        $stmt->bindParam(':value10',$data['name']);
        if($stmt->execute()){
            echo 'ok';
        }else{
            echo 'errour';
        }
    }
    static public function deleteProduct($idproduct){
        $stmt = DataBase::connect()->prepare('DELETE FROM `products` WHERE id =:idproduct');
        $stmt = bindParam(':idproduct',$idproduct);
        $stmt->execute();
    }
   
}
?>
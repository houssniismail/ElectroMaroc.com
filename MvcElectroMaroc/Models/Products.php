<?php


class Products{



    static public function getAll(){
       $stmt = DataBase::connect()->prepare('SELECT * FROM `products`');
       $stmt->execute();
       return $stmt->fetchAll();
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



    static public function deleteProduct($data){
        $stmt = DataBase::connect()->prepare('DELETE FROM `products` WHERE id =:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->execute();
    }


    
    static public function getOneProduct($data){
        $stmt = DataBase::connect()->prepare('SELECT * FROM `products` WHERE id =:id_product');
        $stmt->bindParam('id_product',$data['id']);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    static public function updateProductModel($data){
        $stmt = DataBase::connect()->prepare('UPDATE `products` SET `reference`=:reference,`libelle`=:libelle,`codeBar`=:codeBar,`prix_achat`=:prix_achat,`prix_final`=:prix_final,`prix_ofer`=:prix_ofer,`description`=:description,`category`=:category,`name`=:name WHERE id=:id_product');
        $stmt->bindParam(':reference',$data['reference']);
        $stmt->bindParam(':libelle',$data['libelle']);
        $stmt->bindParam(':codeBar',$data['codeBar']);
        $stmt->bindParam(':prix_achat',$data['prix_achat']);
        $stmt->bindParam(':prix_final',$data['prix_final']);
        $stmt->bindParam(':prix_ofer',$data['prix_ofer']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':category',$data['category']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':id_product',$data['id_product']);
        $stmt->execute();
    }

    
    
        
}
?>
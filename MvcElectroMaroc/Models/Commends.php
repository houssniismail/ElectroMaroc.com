
<?php
class Commends{
      static public function ShowAllCommends($data){
         $stmt = Database::connect()->prepare('SELECT * FROM `commends` WHERE id_client = :id_client');
         $stmt->bindParam(':id_client',$data['id_cline']);
         $stmt->execute();
         $result = $stmt->fetchAll();
         return $result;
      }
      static public function addCommend($data){
        $stmt = DataBase::connect()->prepare('INSERT INTO `commends`(`date_creation`, `id_client`, `id_products_coposant`, `quentity`, `prix_totale`, `image`)
         VALUES (:date_creation, :id_client, :id_product_composant, :quentity, :prix_totale_chaque_produit, :image)');
        $stmt->bindParam(':date_creation',$data['date_creation']);
        $stmt->bindParam(':id_client',$data['id_client']);
        $stmt->bindParam(':id_product_composant',$data['id_product_composant']);
        $stmt->bindParam(':quentity',$data['quentity']);
        $stmt->bindParam(':prix_totale_chaque_produit',$data['prix_totale_chaque_produit']);
        $stmt->bindParam(':image',$data['image']);
        $stmt->execute();
      }
}
?>
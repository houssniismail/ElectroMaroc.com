
<?php
class Commends{
      static public function ShowAllCommends($data){
         $stmt = Database::connect()->prepare('SELECT * FROM `commed` WHERE id_client = :id');
         $stmt->bindParam(':id',$data['id']);
         $stmt->execute();
      }
      static public function addCommend(){
        $stmt = DataBase::connect()->prepare('INSERT INTO `commed`( `date_creation`, `date_envoi`, `date_levrison`, `id_client`, `id_product_composant`, `quentity`, `prix_totale_chaque_produit`, `prix_de_command`) VALUES (:date_creation,:date_envoi,:date_levrison,id_client,:id_product_composant,quentity,:prix_totale_chaque_produit,:prix_de_command)');
        $stmt->bindParam('date_creation');
        $stmt->bindParam('date_envoi');
        $stmt->bindParam('date_levrison');
        $stmt->bindParam('id_client');
        $stmt->bindParam('id_product_composant');
        $stmt->bindParam('quentity');
        $stmt->bindParam('prix_totale_chaque_produit');
        $stmt->bindParam('prix_de_command');
        $stmt->execute();
      }
}
?>
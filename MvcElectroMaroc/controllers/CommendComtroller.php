<?php
class CommendComtroller{
    static public function getAllCommendDeclient(){
        if(isset($_POST['show_your_commend'])){
            $data = array(
                'id_cline'=>$_POST['id_cline'],
            );
          return $result = Commends::ShowAllCommends($data);
        }
        Redirect::to('commend');
    }
    static public function addCommend(){
        if(isset($_POST['add_to_cart'])){
           $data = array(
            'date_creation'=>$_POST['date_creation'],
            'id_client'=>$_POST['id_client'],
            'id_product_composant'=>$_POST['id'],
            'quentity'=>$_POST['quentite'],
            'prix_totale_chaque_produit'=>$_POST[''],
            'image'=>$_POST['image']
           );
           Commends::addCommend($data);
        }
    }
}
?>
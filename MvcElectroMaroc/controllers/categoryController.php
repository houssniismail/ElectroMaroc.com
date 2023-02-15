<?php 
class categoryController{
    static public function getAllcategoryController(){
        $category = category::getAllCategory();
        return $category;
    }
    static public function ajouterCategory(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom'=>$_POST['nom'],
                'description'=>$_POST['description'],
                'image'=>$_POST['image']
            );
            category::addCategor($data);
            session::set('success','produit ajouter');
            Redirect::to('category');
        }
    }
}
<?php
class ProductController{
     static public function getAllProduct(){
        $products = Products::getAll();
        return $products;
    }
    static public function AddConProduc(){
        
      function addPic(){
            if(isset($_FILES['image'])){
                $picname=$_FILES['image']['name'];
                $picsize=$_FILES['image']['size'];
                $pictmpname=$_FILES['image']['tmp_name'];
            
                if($_FILES['image']['error']===0){
                        $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
            
                        $allowed_exs=array("jpg","jpeg","png");
            
                        if(in_array($img_ex_lc,$allowed_exs)){
                            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                            $img_upload_path='./views/uploads/'.$new_img_name;
                            move_uploaded_file($pictmpname,$img_upload_path);
                            return $img_upload_path;
                        }else{
                            die("error");
                        }
                        
                }else{
                        die("error");
                    }     
            }
        }

        
        if(isset($_POST['submit'])){
            $data=array(
                'reference'=>$_POST['reference'],
                'libelle'=>$_POST['libelle'],
                'CodeBar'=>$_POST['CodeBar'],
                'prixdAchat'=>$_POST['prixdAchat'],
                'prixFinal'=>$_POST['prixFinal'],
                'prixdOfer'=>$_POST['prixdOfer'],
                'description'=>$_POST['description'],
                'for_category'=>$_POST['for_category'],
                'image'=>addPic(),
                'name'=>$_POST['name']
            );
            $result = Products::AddProduct($data);
            session::set('success','produit ajouter');
            Redirect::to('ProductAdmin');
        }
    }
}
$result = ProductController::AddConProduc();
?>
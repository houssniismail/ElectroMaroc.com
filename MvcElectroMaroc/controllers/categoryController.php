<?php 
class categoryController{
    static public function getAllcategoryController(){
        $category = category::getAllCategory();
        return $category;
    }
    static public function ajouterCategory(){
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
            $data = array(
                'nom'=>$_POST['nom'],
                'description'=>$_POST['description'],
                'image'=>addPic(),
            );
            category::addCategor($data);
            session::set('success','produit ajouter');
            Redirect::to('category');
        }
    }
    static public function deleteCategory(){
        if(isset($_POST['delete'])){
            $data = array(
              'id'=>$_POST['id'],
            );
            category::delete($data);
            Redirect::to('category');
        }
    }
}
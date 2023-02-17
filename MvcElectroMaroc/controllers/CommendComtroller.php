<?php
class CommendComtroller{
    static public function getAllCommendDeclient(){
        if(isset($_POST['show_your_commend'])){
            $data = array(
                'id'=>$_POST['id_cline'],
            );
            Commends::ShowAllCommends($data);
        }
    }
}
?>
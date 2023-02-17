<?php
class ClientsController{
    static public function loginClient(){
        if(isset($_POST['login'])){
            $data = array(
              'email'=>$_POST['email'],
              'password'=>$_POST['password']
            );
            $result = Clients::loginClients($data);
        }
    }
    static public function registrerClients(){
        if(isset($_POST['Submit'])){
            $data = array(
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'Tele'=>$_POST['Tele'],
                'adriss'=>$_POST['adriss'],
                'ville'=>$_POST['ville'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password']
            );
            $result = Clients::addClientstodatabase($data);
            session::set('success','client ajouter');
            Redirect::to('login');
        }
    }
}
?>
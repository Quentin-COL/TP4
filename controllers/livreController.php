<?php
$action=$_GET['action'];
switch($action){
        case 'list';
            $lesLivres = Livre::findAll();
            include('vues/livre/listeLivres.php');
            break;

        case 'add';
            $mode="Ajouter";
            include('vues/livre/formLivre.php');
            break;

        case 'update';
            $mode="Modifier";
            $livre=Livre::findById($_GET['num']);
            include('vues/livre/formLivre.php');
            break;

        case 'delete';
            $livre=Livre::findById($_GET['num']);
            $nb=Livre::delete($livre);
            if($nb==1){
                $_SESSION['message']=["success"=>"Le livre a bien été supprimé"];
            }else{
                $_SESSION['message']=["danger"=>"Le livre a bien été supprimé"];
            }
            header('location:index.php?uc=livres&action=list');
            break;

        case 'valideForm';
            $livre=new Livre();
            if(empty($_POST['num'])){//cas d'une création
                $livre->setTitre($_POST['titre']);
                $nb=Livre::add($livre);
                $message ="ajouté"; 
            }else{//cas d'une modif
                $livre->setNum($_POST['num']);
                $livre->setTitre($_POST['titre']);
                $nb=Livre::update($livre);
                $message ="modifié";
            }
            if($nb==1){
                $_SESSION['message']=["success"=>"Le livre a bien été $message"];
            }else{
                $_SESSION['message']=["danger"=>"Le livre n'a pas été $message"];
            }
            header('location:index.php?uc=livres&action=list');
            break;
}
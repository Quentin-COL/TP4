<?php
$action=$_GET['action'];
switch($action){
    case 'list';
    $libelle="";
    $continentSel="Tous";
    if(!empty($_POST['libelle']) || !empty($_POST['continentSel'])){
        $libelle=$_POST['libelle'];
        $continentSel=$_POST['continentSel'];
    }
    $lesContinents=Continent::findAll();
    $lesNationalites=Nationalite::findAll($libelle,$continentSel);
            include('vues/nationalite/listeNationalites.php');
            break;

        case 'add';
            $mode="Ajouter";
            $lesContinents=Continent::findAll();
            include('vues/nationalite/formNationalite.php');
            break;

        case 'update';
            $mode="Modifier";
            $lesContinents=Continent::findAll();
            $laNationalite=Nationalite::findById($_GET['num']);
            include('vues/nationalite/formNationalite.php');
            break;

        case 'delete';
            $laNationalite=Nationalite::findById($_GET['num']);
            $nb=Nationalite::delete($laNationalite);
            if($nb==1){
                $_SESSION['message']=["success"=>"Le nationalite a bien été supprimé"];
            }else{
                $_SESSION['message']=["danger"=>"Le nationalite a bien été supprimé"];
            }
            header('location:index.php?uc=nationalites&action=list');
            break;

        case 'validerForm';
            $nationalite=new Nationalite();
            $continent=Continent::findById($_POST['continent']);
            $nationalite->setLibelle($_POST['libelle']) //2 setter
                        ->setContinent($continent);
            if(empty($_POST['num'])){//cas d'une création
                $nb=Nationalite::add($nationalite);
                $message ="ajouté"; 
            }else{//cas d'une modif
                $nb=Nationalite::update($nationalite);
                $message ="modifié";
            }
            if($nb==1){
                $_SESSION['message']=["success"=>"Le nationalite a bien été $message"];
            }else{
                $_SESSION['message']=["danger"=>"Le nationalite n'a pas été $message"];
            }
            header('location:index.php?uc=nationalites&action=list');
            break;
}
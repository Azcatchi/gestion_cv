<?php
//controller user
if(!isset($_REQUEST['action']) ){
     $_REQUEST['action'] = 'default';
}
$action = $_REQUEST['action'];
require_once('modeles/m_cv.php');
switch($action){




  case 'ajoutExperience' :{
    $idUser = $_SESSION['id_user'];
    $intitule = $_POST['intitule'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $description = $_POST['description'];
    CV::ajoutExp($intitule,$date_debut,$date_fin,$description,$idUser);
    // header('Location: ./index.php');
    break;
  }

    /*default:
    	header('Location: ./index.php');
    	break;*/
}

?>

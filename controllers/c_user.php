<?php
//controller user
if(!isset($_REQUEST['action']) ){
     $_REQUEST['action'] = 'default';
}
$action = $_REQUEST['action'];
require_once('modeles/m_user.php');
switch($action){


	//bouton submit de connexion
	case 'toConnnect' :{
		//On récupère les informations du formulaire
		$identifiant = $_POST['identifiant'];
		$motDePasse = $_POST['motDePasse'];

		//On regarde si l'user existe en base
		$user = User::toConnect($identifiant,$motDePasse);

		//S'il existe on met dans la superglobale SESSION ses informations
		if($user){
			$_SESSION['id_user'] = $user[0]['id_user'];
			$_SESSION['identifiant'] = $user[0]['identifiant']		;
		}

		// Dans tous les cas on redirige sur l'index (pour l'instant)
		header('Location: ./index.php');
		break;
	}

	case 'toDisconnect':{
		include('vues/user/v_deconnection.html');
		header('Location: ./index.php');
		break;
	}



	case 'index' :{
		$listAllUser = User::index();
		include('vues/user/v_index.html');
		break;
	}

	case 'view' :{
		$idUser = $_GET['id'];
		$user = User::view($idUser);
    include('vues/user/v_view.php');
    include('vues/cv/c_cv.php');
		break;
	}


	case 'add' :{

		include('vues/user/v_add.php');
    break;
	}

  case 'inscription' :{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse_rue = $_POST['adresse_rue'];
    $adresse_cp = $_POST['adresse_cp'];
    $adresse_ville = $_POST['adresse_ville'];
    $email = $_POST['email'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $photo = $_POST['photo'];
    $identifiant = $_POST['identifiant'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $Add = User::add($nom,$prenom,$adresse_rue,$adresse_cp,$adresse_ville,$email,$date_de_naissance,$photo,$identifiant,$mot_de_passe);
    header('Location: ./index.php');
    break;
  }


	case 'edit' :{
    $idUser = $_GET['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse_rue = $_POST['adresse_rue'];
    $adresse_cp = $_POST['adresse_cp'];
    $adresse_ville = $_POST['adresse_ville'];
    $email = $_POST['email'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $photo = $_POST['photo'];
    $identifiant = $_POST['identifiant'];
    $mot_de_passe = $_POST['mot_de_passe'];
    User::edit($idUser,$nom,$prenom,$adresse_rue,$adresse_cp,$adresse_ville,$email,$date_de_naissance,$photo,$identifiant,$mot_de_passe);
    $user = User::view($idUser);
    include('vues/user/v_view.php');
    break;
	}

	case 'delete' :{
		$idUser = $_POST['id'];
    User::delete($idUser);
    header('Location: ./index.php');
		break;
	}



    default:
    	header('Location: ./index.php');
    	break;
}

?>

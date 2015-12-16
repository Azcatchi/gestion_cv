<?php
include_once('./fct/Connection.php');
class CV{

	function __construct()
	{

	}

  public static function ajoutExp($intitule,$date_debut,$date_fin,$description,$idUser)
	{
		$bdd = Connection::db_connect();
		$req = $bdd->prepare("INSERT INTO CV_experience(intitule,date_debut,date_fin,description,id_user)
		VALUES (:intitule, :date_debut, :date_fin, :description, :idUser)");
			$req->bindParam(':intitule', $intitule);
			$req->bindParam(':date_debut', $date_debut);
			$req->bindParam(':date_fin', $date_fin);
			$req->bindParam(':description', $description);
			$req->bindParam(':idUser', $idUser);
      echo "test";
		$req->execute();

	}



}

?>

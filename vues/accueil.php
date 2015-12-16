<?php
  if(isset($_SESSION['id_user'])){$isConnecte=true;}else{$isConnecte=false;}

  if(!$isConnecte){
?>

<div class="panel panel-primary content">
  <div class="panel-body">
        <h1>Gestion de CV</h1>
        <p>Bienvenue sur le site de gestion des cv</p>
        <p id="test"><span class="span6">Pour consulter les users inscrits : </span>
        	<a href="index.php?uc=user&action=index"
    	    	class="alert button">Utilisateurs inscrits
        	</a>


          <p>
            <span class="span6">Créer un utilisateur : </span>
            <a href="index.php?uc=user&action=add"
      	    	class="warning button">Créer
          	</a>
          </p>

    	</p>
    </div>
</div>

<?php } else{ ?>

  <div class="panel panel-primary content">
    <div class="panel-body">
          <h1>Gestion de CV</h1>
          <p>Bienvenue sur le site de gestion des cv</p>
          <p id="test"><span class="span6">Pour consulter les users inscrits : </span>
          	<a href="index.php?uc=user&action=index"
      	    	class="alert button">Utilisateurs inscrits
          	</a>

      	</p>
      </div>
  </div>


<?php } ?>

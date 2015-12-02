<?php
  if($_SESSION['id_user']!=$user[0]['id_user']){
    $affiche = "disabled";
  }

  else{
    $affiche = "";
  }

 ?>

<div class="row">
  <div class="medium-2 columns">
      <h1>Inscription</h1>
  </div>
</div>
<form class="" method="post" action="index.php?uc=user&action=inscription">
  <br><br>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="nom" <?php echo $affiche ?> value="<?php echo $user[0]['nom'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="prenom" <?php echo $affiche ?> <?php echo $affiche ?> value="<?php echo $user[0]['prenom'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="adresse_rue" <?php echo $affiche ?> value="<?php echo $user[0]['adresse_rue'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="adresse_cp" <?php echo $affiche ?> value="<?php echo $user[0]['adresse_cp'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="adresse_ville" <?php echo $affiche ?> value="<?php echo $user[0]['adresse_ville'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="email" <?php echo $affiche ?> value="<?php echo $user[0]['email'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="date" name ="date_de_naissance" <?php echo $affiche ?> value="<?php echo $user[0]['date_de_naissance'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="url" name ="photo" <?php echo $affiche ?> value="<?php echo $user[0]['photo'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="text" name ="identifiant" <?php echo $affiche ?> value="<?php echo $user[0]['identifiant'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <input type="password" name ="mot_de_passe" <?php echo $affiche ?> value="<?php echo $user[0]['mot_de_passe'];?>"/>
      </div>
    </div>
    <div class="row">
      <div class="medium-2 columns">
        <button type="submit" class="secondary button">S'inscrire</button>
      </div>
    </div>

</form>

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
      <h1>Modification</h1>
  </div>
</div>

<?php echo '<form class="" method="post" action="index.php?uc=user&action=edit&id='.$user[0]['id_user'].'">';?>

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
        <button type="submit" <?php echo $affiche ?> class="secondary button">Mettre à jour</button>
      </div>
    </div>

</form>
<form class="" action="index.php?uc=user&action=delete" method="post">
  <div class="row">
    <div class="medium-2 columns">
  <?php echo '<input type="hidden" name="id" value="'.$user[0]['id_user'].'">';?>
  <input class="secondary button" <?php echo $affiche ?> type="submit" name="submit" value="Supprimer">
</div>
</div>
</form>

<div class="row">
  <div class="medium-2 columns">
<a href="index.php?uc=user&action=index"
  class="alert button">retour
</a>
</div>
</div>

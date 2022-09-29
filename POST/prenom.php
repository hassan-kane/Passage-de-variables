<?php
require "entete.php";
?>
<?php
var_dump($_POST['nom']);
?>
<form class="form" action="recuperationPrenom.php" role="form" method="post" enctype="multipart/form-data">
<br>
<div>
    <label class="form-label" for="Prenom">Prenom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ex : DIALLO" value="">
    <input type="hidden" name="nom" value="<?php echo $_POST['nom'];?>">
</div>
<br>
<div class="form-actions">
    <button type="submit" class="btn btn-success"><span class="bi bi-check2-circle"></span> Valider</button>    </div>
    <a class="btn btn-primary" href="index.php?controle=c_admin&action=admin"><span class="bi-arrow-left"></span> Retour</a>
</div>
</form>
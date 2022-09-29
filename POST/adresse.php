<?php
require "entete.php";
?>
<?php
var_dump($_POST['nom']);
var_dump($_POST['prenom']);
?>
<form class="form" action="recuperationAdresse.php" role="form" method="post" enctype="multipart/form-data">
<br>
<div>
    <label class="form-label" for="adresse">Adresse:</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Ex : DIALLO" value="">
    <input type="hidden" name="nom" value="<?php echo $_POST['nom']?>">
    <input type="hidden" name="prenom" value="<?php echo $_POST['prenom']?>">
</div>
<br>
<div class="form-actions">
    <button type="submit" class="btn btn-success"><span class="bi bi-check2-circle"></span> Valider</button>    </div>
    <a class="btn btn-primary" href="index.php?controle=c_admin&action=admin"><span class="bi-arrow-left"></span> Retour</a>
</div>
</form>

<?php
if(isset($_POST['adresse'])) {
    echo $_POST['nom'];
    echo $_POST['prenom'];
    echo $_POST['adresse'];
}
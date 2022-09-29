<h1>Vos informations</h1>
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
?>

<?php echo 'Nom :' .' '. $nom;?>
<br>
<?php echo 'Prenom :' .' '. ($prenom);?>
<br>
<?php echo 'Adresse :' .' '. $adresse;?>
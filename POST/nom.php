<?php
require "entete.php";
?>
<form class="form" action="recuperationNom.php" role="form" method="post" enctype="multipart/form-data">
    <br>
    <div>
        <label class="form-label" for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex : Xavier" value="">
    </div>
    <br>
    <div class="form-actions">
        <button type="submit" class="btn btn-success"><span class="bi bi-check2-circle"></span> Valider</button></div>
</form>
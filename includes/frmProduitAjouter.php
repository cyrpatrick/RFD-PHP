<?php
if (!isset($reference)) $reference = "";
if (!isset($monProduit)) $monProduit = "";
if (!isset($prix)) $prix = "";
if (!isset($photo)) $photo = "";
// ATTENTION c'est un pérateur ternaire, donc elle ne s'applique pas dans ce cas $reference = (!isset($reference) ?? "";)
?>
<form method="post" action="index.php?page=produitAjouter" enctype="multipart/form-data">
    <div>
        <label for="reference">Référence&nbsp;: </label>
        <input type="text" id="reference" name="reference" value="<?=$reference?>" />
    </div>
    <div>
        <label for="monProduit">Produit&nbsp;: </label>
        <input type="text" id="monProduit" name="monProduit" value="<?=$monProduit?>" />
    </div>
    <div>
        <label for="prix">Prix&nbsp;: </label>
        <input type="text" id="prix" name="prix" value="<?=$prix?>"/>
    </div>
    <div>
        <label for="photo">Photo&nbsp;: </label>
        <input type="file" id="photo" name="photo" value="<?=$photo?>"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="albator" />
</form>
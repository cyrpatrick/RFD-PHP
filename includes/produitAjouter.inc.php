<h1>Ajouter un produit</h1>
<?php
if (isset($_POST['albator'])){
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $monProduit = isset($_POST['monProduit']) ? $_POST['monProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";
    // $photo = $_FILES['photo'];
    $nomPhoto = $_FILES['photo']['name'];
    $typePhoto = $_FILES['photo']['type'];
    $tmpPhoto = $_FILES['photo']['tmp_name'];
    $errorPhoto = $_FILES['photo']['error'];
    $_sizePhoto = $_FILES['photo']['size'];

    if ($errorPhoto == 0) {
        $nomPhoto = supprAccent($nomPhoto);
        if (checkExtension("image", $nomPhoto)){

        }
        else
            echo "Extension verboten";
    }
    else {
        echo "<p>Marche pas</p>";
    }
}
else {
    require_once "frmProduitAjouter.php";
}

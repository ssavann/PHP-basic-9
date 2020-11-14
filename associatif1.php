

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Les tableau associatifs</title>
</head>
<body>
<style>
.box {
    width: 400px;
    margin: 150px auto;
    font-family: arial;
    font-size: 15px;
    border: 1px solid #eaeaea;
    box-shadow: 2px 2px #ccc;
    padding: 15px;
}
</style>

<div class="box">

<?php
    if(isset($_POST['valider'])){
    if((!empty($_POST['prenom'])) || (!empty($_POST['nom'])) || (!empty($_POST['email'])) || (!empty($_POST['ville'])) ){
        
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $ville = $_POST['ville'];
        $coordonnees = array(
                                'prenom' => $prenom,   // 'prenom' est une clef associatif
                                'nom' => $nom, 
                                'email' => $email, 
                                'ville' => $ville
                                );
        // echo $coordonnees['email']; // Il suffit d'entree la clef associatif pour retrouver la valeur

        foreach($coordonnees as $cle => $valeur ){
            echo $cle. ' : ' .$valeur. '<br />';

        }

        if(in_array('Paris', $coordonnees)){
            echo 'Vous habitez la Capital';
        }
    }

}
?>

    <p>Quelles sont vos coordonnees? </p>
    
    <form method="post" action="">
    <p><input type="text" name="prenom" placeholder="Votre Prenom" /></p>
    <p><input type="text" name="nom" placeholder="Votre Nom" /></p>
    <p><input type="text" name="email" placeholder="Votre email" /></p>
    <p><input type="text" name="ville" placeholder="Votre ville" /></p>
    <p><input type="submit" name="valider" value="Valider" /></p>
    </form>
</div>

</body>
</html>
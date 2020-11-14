

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Les tableau array()</title>
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
    <form method="post" action="">
<?php

if(isset($_POST['valider'])){
    if(!empty($_POST['jour'])){     //si ce n'est pas vide -> !empty
        $jours = $_POST['jour'];    // superglobale qu'on range dans $jour
        echo '<p align="center"><b>Mes jours de conges sont: </b></p>';

    }
    foreach($jours as $jour) {      //foreach va parcourir les valeurs cochees et le mettre dans $jour
        echo $jour. '<br />';
    }
}
?>

        <p>- Quelles sont vos jours de conges? </p>
        <input type="checkbox" name="jour[]" value="lundi" />Lundi <br />   <!-- le "[]" represente un tableau -->
        <input type="checkbox" name="jour[]" value="Mardi" />Mardi <br />   <!-- Tout ce qui est coche sera retenu dans "jour[]" -->
        <input type="checkbox" name="jour[]" value="Mercredi" />Mercredi <br />
        <input type="checkbox" name="jour[]" value="Jeudi" />Jeudi <br />
        <input type="checkbox" name="jour[]" value="Vendredi" />Vendredi <br />
        <input type="checkbox" name="jour[]" value="Samedi" />Samedi <br />
        <input type="checkbox" name="jour[]" value="Dimanche" />Dimanche <br />
        <p><input type="submit" name="valider" value="Valider" /></p>


    
    </form>
</div>

</body>
</html>
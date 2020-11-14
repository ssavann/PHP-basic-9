<?php
$message='';
if(isset($_POST['valider'])){
    if(!empty($_POST['jour'])){     //si ce n'est pas vide -> !empty
        $jour = $_POST['jour'];
        $message = '<p align="center"><b>Aujourd\'hui nous sommes ' .$jour. '</b></p>';

    }

}
?>


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
        <?= $message; ?>
        <p>- Quelle jour sommes-nous? </p>
        <input type="radio" name="jour" value="lundi" />Lundi <br />
        <input type="radio" name="jour" value="Mardi" />Mardi <br />
        <input type="radio" name="jour" value="Mercredi" />Mercredi <br />
        <input type="radio" name="jour" value="Jeudi" />Jeudi <br />
        <input type="radio" name="jour" value="Vendredi" />Vendredi <br />
        <input type="radio" name="jour" value="Samedi" />Samedi <br />
        <input type="radio" name="jour" value="Dimanche" />Dimanche <br />
        <p><input type="submit" name="valider" value="Valider" /></p>
    
    </form>
</div>

</body>
</html>
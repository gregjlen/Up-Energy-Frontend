<?php

session_start();

if (isset($_POST['login'])){

    $code = $_POST['password'];

    if ($code == "0504"){
        $_SESSION['mdp'] = 'start';
        header('Location: index.php');
    }else{
        echo 'Mot de passe faux';
    }
}

?>

<form method="post">
    <input name="password" type="text" placeholder="Code">
    <input name="login" value="Envoyer" type="submit">
</form>
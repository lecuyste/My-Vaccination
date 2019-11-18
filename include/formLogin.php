<?php
if (!isset($logMail)){
    $logMail ="";
}
?>

<form method="post" action="index.php?page=login">
    <div>
        <label for="pseudo">Votre adresse mail: </label>
        <input type="text" id="logMail" name="logMail" value="<?=$logMail?>" />
    </div>
    <div>
        <label for="mdp">Mot de passe: </label>
        <input type="password" id="mdp" name="mdp" />
    </div>
    <div>
        <input type="submit" value="Valider" />
    </div>
    <input type="hidden" name="log" />
</form>
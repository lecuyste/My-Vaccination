<?php
if (!isset($nom)) $login = "";
if (!isset($mail)) $mail = "";
?>
<form method="post" action="index.php?page=inscription">
    <div>
        <label for="login">Nom: </label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>"/>
    </div>
    <div>
        <label for="login">Prénom: </label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>"/>
    </div>
    <div>
        <label for="mail">Mail&nbsp;: </label>
        <input type="text" id="mail" name="mail" value="<?=$mail?>"/>
    </div>
    <div>
        <label for="mdp">Mot de passe : </label>
        <input type="password" id="mdp" name="mdp" />
    </div>
    <div>
        <label for="mdp">Confirmation mot de passe&nbsp;: </label>
        <input type="password" id="conf_mdp" name="conf_mdp"/>
    </div>
    <div>
        <input type="submit" value="Valider" />
    </div>
    <input type="hidden" name="inscr" />
</form>
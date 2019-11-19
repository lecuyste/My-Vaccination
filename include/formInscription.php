<?php
if (!isset($mail)) $mail = "";
if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
?>
<form method="post" action="index.php?page=inscription">
    <div>
        <label for="nom">Nom: </label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>"/>
    </div>
    <div>
        <label for="prenom">Prénom: </label>
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
        <label for="conf_mdp">Confirmation mot de passe&nbsp;: </label>
        <input type="password" id="conf_mdp" name="conf_mdp"/>
    </div>
    <div>
        <input type="submit" value="Valider" />
    </div>
    <input type="hidden" name="inscr" />
</form>
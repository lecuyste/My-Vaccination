<?php
if (!isset($logMail)){
    $logMail ="";
}
?>
<div class="container">
    <section id="signup">
<div class="wrap triche">
<form method="post" action="index.php?page=login">
    <div>
        <label for="mail">Votre adresse mail: </label>
        <input type="text" id="logMail" name="logMail" value="<?php if (!empty($logMail)) {
            echo $logMail;
        }?>" />
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
</div>
    </section>
</div>
<?php
if (!isset($mail)) $mail = "";
if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($birthLoc)) $birthLoc = "";
if (!isset($birthDate)) $birthDate = "";
if (!isset($poids)) $poids = "";
if (!isset($taille)) $taille = "";
if (!isset($sang)) $sang = "";
?>
    <div class="container">
    <section id="signup">
        <div class="wrap triche">
            <form method="post" action="index.php?page=ajoutUserAdmin" novalidate>
                <div>
                    <label for="nom">Nom: </label>
                    <input type="text" id="nom" name="nom" value="<?php if (!empty($nom)) {
                        echo $nom;
                    }?>"/>
                </div>
                <div>
                    <label for="prenom">Prénom: </label>
                    <input type="text" id="prenom" name="prenom" value="<?php if (!empty($prenom)) {
                        echo $prenom;
                    }?>"/>
                </div>
                <div>
                    <label for="mail">Mail&nbsp;: </label>
                    <input type="text" id="mail" name="mail" value="<?php if (!empty($mail)) {
                        echo $mail;
                    }?>"/>
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
                    <label for="birthDate">Date de naissance : </label>
                    <input type="date" id="birthDate" name="birthDate" value="<?php if (!empty($birthDate)) {
                        echo $birthDate;
                    }?>"/>
                </div>
                <div>
                    <label for="birthLoc">Lieu de naissance : </label>
                    <input type="text" id="birthLoc" name="birthLoc" value="<?php if (!empty($birthLoc)) {
                        echo $birthLoc;
                    }?>"/>
                </div>
                <div>
                    <label for="poids">Poids de naissance (arrondi au grammes) : </label>
                    <input type="number" min="0" max="5000" step="1" id="poids" name="poids" value="<?php if (!empty($poids)) {
                        echo $poids;
                    }?>"/>
                </div>
                <div>
                    <label for="taille">Taille de naissance (arrondie au centimètre) : </label>
                    <input type="number" min="0" max="70" step="1" id="taille" name="taille" value="<?php if (!empty($taille)) {
                        echo $taille;
                    }?>"/>
                </div>
                <div>
                    <p>Séléctionné votre groupe sanguin : </p>
                    <div id="btn_radio">
                        <input type="radio" id="aPlus" name="sang" value="A+" <?php
                        if (!empty($sang) && $sang == 'A+'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="aPlus"> A+ </label>

                        <input type="radio" id="aMoins" name="sang" value="A-" <?php
                        if (!empty($sang) && $sang == 'A-'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="aMoins"> A- </label>

                        <input type="radio" id="bPlus" name="sang" value="B+" <?php
                        if (!empty($sang) && $sang == 'B+'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="bPlus"> B+ </label>

                        <input type="radio" id="bMoins" name="sang" value="B-" <?php
                        if (!empty($sang) && $sang == 'B-'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="bMoins"> B- </label>

                        <input type="radio" id="abPlus" name="sang" value="AB+" <?php
                        if (!empty($sang) && $sang == 'AB+'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="abPlus"> AB+ </label>

                        <input type="radio" id="abMoins" name="sang" value="AB-" <?php
                        if (!empty($sang) && $sang == 'AB-'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="abMoins"> AB- </label>

                        <input type="radio" id="oPlus" name="sang" value="O+" <?php
                        if (!empty($sang) && $sang == 'O+'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="oPlus"> O+ </label>

                        <input type="radio" id="oMoins" name="sang" value="O-" <?php
                        if (!empty($sang) && $sang == 'O-'){
                            echo "checked";
                        }
                        ?>/>
                        <label for="oMoins"> O- </label>

                    </div>
                </div>
                <div>
                    <input type="submit" value="Valider" />
                </div>
                <input type="hidden" name="ajoutUser" />
            </form>
        </div>
    </section>
    </div>

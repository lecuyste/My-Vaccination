<?php
if (!isset($birthLoc)) $birthLoc = "";
if (!isset($birthDate)) $birthDatet = "";
if (!isset($poids)) $poids = "";
if (!isset($taille)) $taille = "";
if (!isset($abMoins)) $abMoins = "";
if (!isset($abPlus)) $abPlus = "";
if (!isset($aMoins)) $aMoins = "";
if (!isset($aPlus)) $aPlus = "";
if (!isset($bMoins)) $bMoins = "";
if (!isset($bPlus)) $bPlus = "";
if (!isset($oMoins)) $oMoins = "";
if (!isset($oPlus)) $oPlus = "";
?>

<form method="post" action="index.php?page=renseignement">
    <div>
        <label for="birthDate">Date de naissance : </label>
        <input type="date" id="birthDate" name="birthDate" value="<?=$birthDate?>"/>
    </div>
    <div>
        <label for="birthLoc">Lieu de naissance : </label>
        <input type="text" id="birthLoc" name="birthLoc" value="<?=$birthLoc?>"/>
    </div>
    <div>
        <label for="poids">Poids de naissance (arrondi au grammes) : </label>
        <input type="number" min="0" max="5000" step="1" id="poids" name="poids" value="<?=$poids?>"/>
    </div>
    <div>
        <label for="taille">Taille de naissance (arrondie au centimètre) : </label>
        <input type="number" min="0" max="70" step="1" id="taille" name="taille" value="<?=$taille?>"/>
    </div>
    <div>
        <p>Séléctionné votre groupe sanguin : </p>
        <div>
            <input type="radio" id="aPlus" name="sang" value="<?=$aPlus?>"/>
            <label for="aPlus"> A+ </label>

            <input type="radio" id="aMoins" name="sang" value="<?=$aMoins?>/>
            <label for="aMoins"> A- </label>

            <input type="radio" id="bPlus" name="sang" value="<?=$bPlus?>/>
            <label for="bPlus"> B+ </label>

            <input type="radio" id="bMoins" name="sang" value="<?=$bMoins?>/>
            <label for="bMoins"> B- </label>

            <input type="radio" id="abPlus" name="sang" value="<?=$abPlus?>/>
            <label for="abPlus"> AB+ </label>

            <input type="radio" id="abMoins" name="sang" value="<?=$abMoins?>/>
            <label for="abMoins"> AB- </label>

            <input type="radio" id="oPlus" name="sang" value="<?=$oPlus?>/>
            <label for="oPlus"> O+ </label>

            <input type="radio" id="oMoins" name="sang" value="<?=$oMoins?>
            <label for="oMoins"> O- </label>
        </div>
    </div>
    <div>
        <input type="submit" value="Valider" />
    </div>
    <input type="hidden" name="rens" />
</form>
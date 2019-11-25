<?php
if (!isset($birthLoc)) $birthLoc = "";
if (!isset($birthDate)) $birthDate = "";
if (!isset($poids)) $poids = "";
if (!isset($taille)) $taille = "";
if (!isset($sang)) $sang = "";

$id_user = $_SESSION['login']['id'];
$sql = "SELECT * FROM users where idUSER = $id_user";
$query = $pdo->prepare($sql);
$query->execute();
$profil = $query->fetch();

?>

<form method="post" action="index.php?page=renseignement">
    <div>
        <label for="birthDate">Date de naissance : </label>
        <input type="date" id="birthDate" name="birthDate" value="<?php if (!empty($profil['birthDate'])) {
            echo $profil['birthDate'];
        }?>"/>
    </div>
    <div>
        <label for="birthLoc">Lieu de naissance : </label>
        <input type="text" id="birthLoc" name="birthLoc" value="<?php if (!empty($profil['birthLoc'])) {
            echo $profil['birthLoc'];
        }?>"/>
    </div>
    <div>
        <label for="poids">Poids de naissance (arrondi au grammes) : </label>
        <input type="number" min="0" max="5000" step="1" id="poids" name="poids" value="<?php if (!empty($profil['poids'])) {
            echo $profil['poids'];
        }?>"/>
    </div>
    <div>
        <label for="taille">Taille de naissance (arrondie au centimètre) : </label>
        <input type="number" min="0" max="70" step="1" id="taille" name="taille" value="<?php if (!empty($profil['taille'])) {
            echo $profil['taille'];
        }?>"/>
    </div>
    <div>
        <p>Séléctionné votre groupe sanguin : </p>
        <div>
            <input type="radio" id="aPlus" name="sang" value="A+"/>
            <label for="aPlus"> A+ </label>

            <input type="radio" id="aMoins" name="sang" value="A-"/>
            <label for="aMoins"> A- </label>

            <input type="radio" id="bPlus" name="sang" value="B+"/>
            <label for="bPlus"> B+ </label>

            <input type="radio" id="bMoins" name="sang" value="B-"/>
            <label for="bMoins"> B- </label>

            <input type="radio" id="abPlus" name="sang" value="AB+"/>
            <label for="abPlus"> AB+ </label>

            <input type="radio" id="abMoins" name="sang" value="AB-"/>
            <label for="abMoins"> AB- </label>

            <input type="radio" id="oPlus" name="sang" value="O+"/>
            <label for="oPlus"> O+ </label>

            <input type="radio" id="oMoins" name="sang" value="O-"/>
            <label for="oMoins"> O- </label>
        </div>
    </div>
    <div>
        <input type="submit" name="submitted" value="Valider" />
    </div>
    <input type="hidden" name="rens" />
</form>
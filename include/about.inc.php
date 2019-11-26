<h2> Blablabla </h2>
<?php

if (isLoged()){
    $id_user = $_SESSION['login']['id'];
    $sql = "SELECT * FROM users where idUSER = $id_user";
    $query = $pdo->prepare($sql);
    $query->execute();
    $profil = $query->fetch();
    echo "<h2> Mon profil </h2>";
    ?>
<p> Mon nom : <?php if (!empty($profil['nom'])){
    echo $profil['nom'];
} else {
    echo "Champ non renseigné";
}?></p>
    <p> Mon prénom : <?php if (!empty($profil['prenom'])){
            echo $profil['prenom'];
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Mon adresse mail : <?php if (!empty($profil['mail'])){
            echo $profil['mail'];
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Ma date de naissance : <?php if (!empty($profil['birthDate'])){
            echo strftime("%d %B %G", strtotime($profil['birthDate']));
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Mon lieu de naissance : <?php if (!empty($profil['birthLoc'])){
            echo $profil['birthLoc'];
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Mon poids de naissance : <?php if (!empty($profil['poids'])){
            echo $profil['poids'] . " grammes";
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Ma taille de naissance : <?php if (!empty($profil['taille'])){
            echo $profil['taille'] . " centimètres";
        } else {
            echo "Champ non renseigné";
        }?></p>
    <p> Mon groupe sanguin : <?php if (!empty($profil['sang'])){
            echo $profil['sang'];
        } else {
            echo "Champ non renseigné";
        }?></p>
<?php }
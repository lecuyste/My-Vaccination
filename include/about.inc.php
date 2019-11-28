<?php
if (isAdmin()){

}
elseif (isLoged()){
    $id_user = $_SESSION['login']['id'];
    $sql = "SELECT * FROM users where idUser = $id_user";
    $query = $pdo->prepare($sql);
    $query->execute();
    $profil = $query->fetch();
    echo "<h2> Mon profil </h2>";
    ?>
    <div class="triche">
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
        }?></p></div>
<?php } else {
   ?>

    <section class="page-slider">
        <div class="page-flexslider flexslider">
            <ul class="slides">
                <li><img class="vaccinate" src="assets/img/mesvaccins.jpg" width="670px" height="250px" alt=""></li>
                <li><img class="banniere" src="assets/img/banniere.jpg" width="670px" height="250px" alt=""></li>
            </ul>
        </div>
        <div class="clear"></div>
    </section>

    <div class="actutitre">
        <ul class="mainactu">
            <li>Actualités:</li>
        </ul>
    </div>

    <div class="actugauche">
        <ul class="actus1">
            <li><img src="assets/img/needle.png" width="230px" height="184px" alt=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ex non ipsum interdum accumsan. Nunc sem dui, egestas sit amet elit ac, accumsan scelerisque quam. Etiam eu tempor quam. Mauris eleifend, ligula sit amet egestas fringilla, tortor diam ornare tortor, ac aliquam neque felis sit amet leo. Donec tincidunt sed magna in ultricies. In hac habitasse platea dictumst. Praesent et pretium orci, in consequat augue.</p></li>
        </ul>
    </div>

    <div class="actudroite">
        <ul class=actus2>
            <li><img src="assets/img/operation.png" width="200px" height="184px" alt=""><p>Mauris in purus sit amet risus pulvinar fringilla. Integer volutpat quam non auctor aliquet. Vivamus vel auctor elit, at laoreet justo. Duis ipsum tellus, mattis vitae porta vel, malesuada sit amet libero. Aenean ac tellus tristique, maximus justo convallis, iaculis ex. Donec at efficitur quam. Aenean dolor felis, fermentum in lobortis a, lobortis sit amet justo. Nunc quis eleifend nisl. Curabitur varius nibh tellus, sit amet pretium mi porttitor at. Sed pellentesque sem lorem, sit amet cursus ante sollicitudin at.</p></li>
        </ul>
    </div>

<?php
}
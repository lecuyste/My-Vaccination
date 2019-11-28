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
            <li><img src="assets/img/needle.png" width="230px" height="184px" alt="">
                <h2>Le vaccin contre la grippe est-il vraiment efficace ?</h2> </br>
                <p>Alors que la campagne contre la grippe saisonnière a débuté, NFactoLab a voulu savoir si le vaccin était vraiment efficace et s'il était possible de tomber malade même en l'ayant reçu.</p>
                <p>Contrairement à ce que l'on pourrait penser, le vaccin contre la grippe n'est jamais efficace à 100%. Chaque année, l'Organisation mondiale de la santé (OMS) se base sur les souches qui circulent le plus pour décider de la composition du vaccin. Mais ce n'est pas une décision qui se prend à la dernière minute. Pour assurer une production suffisante de vaccins, l'OMS a fait sa sélection au mois de février 2019. Il suffit donc qu'une souche de grippe ait muté entre le moment où on a fabriqué le vaccin et l'épidémie, pour que celui-ci perde une partie de son efficacité. Ces dernières années, l'efficacité du vaccin se situe entre 30 à 50% environ. </p>
        </ul>
    </div>

    <div class="actudroite">
        <ul class=actus2>
            <li><img src="assets/img/operation.png" width="200px" height="184px" alt="">
                <h2>Virus de la grippe : les conseils de Michel Cymes pour la vaccination</h2> </br>
                <p>Chaque année, des millions de personnes sont touchées par le virus de la grippe. La campagne de vaccination a commencé depuis le 15 octobre et se terminera le 31 janvier 2020.</p>
                <p>La campagne de vaccination a commencé le 15 octobre et se terminera le 31 janvier 2020 mais le conseil est de ne pas attendre car il y a un délai entre le moment où l'on se fait vacciner et celui où l'on est effectivement protégé contre la grippe saisonnière. Ce temps de latence dure environ 2 semaines : votre système immunitaire a besoin de ce délai pour réagir au vaccin même s'il n’est jamais efficace à 100%. </p>
                <p>Le virus de la grippe change d'une année sur l'autre et le vaccin prend du temps à être fabriqué. La version qui est proposée, aujourd'hui, se concocte dès le mois de février et l'Organisation Mondiale de la Santé (OMS) tient compte de la nature des souches qui circulent à ce moment-là. En huit mois, le virus a tout le temps de muter et, à l'arrivée, de perdre en efficacité. Même si, bien que vacciné, vous attrapez la grippe, elle sera moins sévère que si vous n'étiez pas vacciné.</p></li>
        </ul>
    </div>

<?php
}
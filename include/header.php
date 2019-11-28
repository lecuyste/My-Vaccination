<body class="master">
<header class="entete">
                <?php
                // Si admin
                if (isAdmin()) {
                    $id_user = $_SESSION['login']['id'];
                    $sql = "SELECT * FROM users where idUSER = $id_user";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $profil = $query->fetch();
                    ?>
    <link href="./assets/css/styleAdmin.css" rel="stylesheet">
    <div id="header">
        <img src="assets/img/logo.png">

    </div>

    <div id="sidemenu">
        <ul>
            <li><a href="index.php?page=userAdmin" > Table des utilisateurs </a></li>
                <li><a href="index.php?page=vaccinsAdmin" > Table des vaccins </a></li>
            <li><a href="index.php?page=jointureAdmin" > Table des jointures </a></li>
            <li><a href="index.php?page=contactAdmin" > Table des messages reçus</a></li>
            <li><a href="index.php?page=logout" > Logout </a></li>
            <?php

            $pageAdmin = $_GET['page'];
            if ($pageAdmin == "userAdmin"){
                echo "<li><a href=\"index.php?page=ajoutUserAdmin\" > Ajouter un utilisateur </a></li>";
                echo "<li><a href=\"#\" > Modifier un utilisateur </a></li>";
                echo "<li><a href=\"#\" > Supprimer un utilisateur </a></li>";
            }
            if ($pageAdmin == "vaccinsAdmin"){
                echo "<li><a href=\"#\" > Ajouter un vaccin </a></li>";
                echo "<li><a href=\"#\" > Modifier un vaccin </a></li>";
                echo "<li><a href=\"#\" > Supprimer un vaccin </a></li>";
            }
            if ($pageAdmin == "jointureAdmin"){
                echo "<li><a href=\"#\" > Ajouter une jointure </a></li>";
                echo "<li><a href=\"#\" > Modifier une jointure </a></li>";
                echo "<li><a href=\"#\" > Supprimer une jointure </a></li>";
            }
            ?>

        </ul>
    </div>

    <div id="data">

        <?php
                }
                //Si utilisateur
                elseif (isLoged()){
                    $id_user = $_SESSION['login']['id'];
                    $sql = "SELECT * FROM users where idUSER = $id_user";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $profil = $query->fetch();
                    ?>
                    <link href="./assets/css/style.css" rel="stylesheet">
                    <div class="wrap">
        <img class="vaccin" src="assets/img/logo.png" alt="">
        <nav>
            <ul class="titre">
                <?php
                echo "<li><a href=\"index.php?page=about\">Mon profil</a></li>";
                if (empty($profil['modifiedAt'])){
                    echo "<li><a href=\"index.php?page=renseignement\">Ajouter mes Renseignements</a></li>";
                } else {
                    echo "<li><a href=\"index.php?page=renseignement\">Modifier mes Renseignements</a></li>";
                }
                echo "<li><a href=\"index.php?page=mesVaccins\">Mes vaccins</a></li>";
                ?> </ul>
            <ul class="log"> <?php
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                ?>
            </ul>
        </nav>
    </div>
                    <?php
                }
                //Si pas logged
                else { ?>
                    <link href="./assets/css/style.css" rel="stylesheet">
                    <div class="wrap">

        <img class="vaccin" src="assets/img/logo.png" alt="">
          <nav>
            <ul class="titre">
              <li><a href="index.php">Accueil</a></li>
              <li><a href="index.php?page=quiSommesNous">Qui sommes nous ?</a></li>
              <li><a href="index.php?page=listeVaccin">Les vaccins</a></li>
             <!-- <li><a href="index.php?page=vaccinsVoyage">Je part en voyage</a></li>-->
            </ul>
            <ul class="log">
              <li><a href="index.php?page=login">Connexion</a></li>
              <li><a href="index.php?page=inscription">Inscription</a></li>
            </ul>
          </nav>
      </div>
<?php
                    if (isset($_POST['inscr'])) {
                        $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
                        $sql = "SELECT COUNT(*) FROM inscription WHERE mail='" . $mail . "'";
                    }
                }
                ?>
            </ul>
    </nav>
</header>
<main>

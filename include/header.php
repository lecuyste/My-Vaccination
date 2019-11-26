<body>
<header>
                <?php
                // Si admin
                if (isAdmin()) {
                    $id_user = $_SESSION['login']['id'];
                    $sql = "SELECT * FROM users where idUSER = $id_user";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $profil = $query->fetch();
                    if (empty($profil['modifiedAt'])){
                        echo "<li><a href=\"index.php?page=renseignement\">Ajouter mes Renseignements</a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=renseignement\">Modifier mes Renseignements</a></li>";
                    }
                    echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                    echo "<h1> Vous êtes un Admin " . $profil['prenom'] . " ! </h1>";
                }
                //Si utilisateur
                elseif (isLoged()){
                    $id_user = $_SESSION['login']['id'];
                    $sql = "SELECT * FROM users where idUSER = $id_user";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $profil = $query->fetch();
                    if (empty($profil['modifiedAt'])){
                        echo "<li><a href=\"index.php?page=renseignement\">Ajouter mes Renseignements</a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=renseignement\">Modifier mes Renseignements</a></li>";
                    }
                    echo '<li><a href="index.php?page=mesVaccins">Mes vaccins</a></li>';
                    echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                    echo "<h1> Vous êtes un utilisateur " . $profil['prenom'] . " ! </h1>";
                }
                //Si pas logged
                else {
                    echo "<li><a href=\"index.php?page=inscription\">Inscription</a></li>";
                    echo "<li><a href=\"index.php?page=login\">Connexion</a></li>";
                    echo "<li><a href=\"index.php?page=contact\">Contact</a></li>";
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

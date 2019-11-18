<body>
<header>
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                    //echo "<li><a href=\"index.php?page=profil\">Mon profil</a></li>";
                    echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
                } else {
                    echo "<li><a href=\"index.php?page=inscription\">Inscription</a></li>";
                    echo "<li><a href=\"index.php?page=login\">Connexion</a></li>";
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

<h1 class="p-3  d-flex">Connexion</h1>
<?php
if (isset($_POST['log'])) {
    if (isset($_POST['logMail'])) {
        $logMail = $_POST['logMail'];
    } else {
        $logMail = "";
    }
    if (isset($_POST['mdp'])) {
        $mdp = $_POST['mdp'];
    } else {
        $mdp = "";
    }

    $erreur = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $logMail = test_input($_POST["logMail"]);
        $mdp = test_input($_POST["mdp"]);
    }

    if (!filter_var($logMail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");
    if (mb_strlen($mdp) < 6) {
        array_push($erreur, "Votre mot de passe contient au minimum 6 caractères");
    }
    if (count($erreur) > 0) {
        $msg = "<ul>";
        $i = 0;
        while ($i < count($erreur)) {
            $msg .= "<li>" . $erreur[$i] . "</li>";
            $i++;
        }
        $msg .= "</ul>";
        echo $msg;
        include "formLogin.php";
    } else {
        echo "Test matching Log/mdp</br>";

        $getDatas = "SELECT * FROM users WHERE mail ='" . $logMail . "'";
        $result = $pdo->query($getDatas)->fetch(PDO::FETCH_ASSOC);
        $_SESSION['$logMail'] = $result['mail'];
        $hash = $result['password'];
        $ip = $_SERVER['REMOTE_ADDR'];

        if (password_verify($mdp, $hash)) {
            $_SESSION['login'] = array(
                    'id' => $result['idUser'],
                    'email' => $result['mail'],
                    'role' => $result['role'],
                    'ip' => $ip);
            $redirection = "<script>document.location.href='http://localhost/BCI1/myVaccination'</script>";
            if (isLoged()){
                echo $redirection;
            }
        } else {
            echo "L'adresse mail et le mot de passe ne correspondent pas";
        }
    }
} else {
    require_once "formLogin.php";
}
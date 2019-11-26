<h1>Inscription</h1>
<?php
if (isset($_POST['inscr'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    $conf_mdp = isset($_POST['conf_mdp']) ? $_POST['conf_mdp'] : "";
    $erreurs = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = test_input($_POST["nom"]);
        $prenom = test_input($_POST["prenom"]);
        $mail = test_input($_POST["mail"]);
        $mdp = test_input($_POST["mdp"]);
        $conf_mdp = test_input($_POST["conf_mdp"]);
    }
    $erreurs = textValide($erreurs, $nom, 'nom', 2, 100);
    $erreurs = textValide($erreurs, $prenom, 'prenom', 2, 100);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");
    if (mb_strlen($mdp) < 6)
        array_push($erreurs, "Votre mot de passe doit comporter 6 caractères minimum");
    if($mdp != $conf_mdp)
        array_push($erreurs, "Les deux mots de passes sont différents");
    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;
        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }
        $message .= "</ul>";
        echo $message;
        include "formInscription.php";
    } else {
        $sql = "SELECT COUNT(*) FROM users WHERE mail='". $mail . "'";
        $nombreOccurences = $pdo->query($sql)->fetchColumn();
        if ($nombreOccurences == 0) {
            $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (nom, prenom, mail, password, role, createdAt) VALUES ( :nom, :prenom, :mail, :password, 1, NOW())";
            $query = $pdo->prepare($sql);
            $query->bindValue(':nom', ucfirst($nom), PDO::PARAM_STR);
            $query->bindValue(':prenom', ucfirst($prenom), PDO::PARAM_STR);
            $query->bindValue(':mail', $mail, PDO::PARAM_STR);
            $query->bindValue(':password', $mdpHash, PDO::PARAM_STR);
            $query->execute();
        }
        else {
            echo "Vous êtes déjà dans la BDD";
        }
    }
} else {
    require_once "formInscription.php";
}
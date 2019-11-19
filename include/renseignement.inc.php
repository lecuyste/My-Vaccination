<h1>Renseignements</h1>
<?php
if (isset($_POST['rens'])) {
    $birthDate = isset($_POST['birthDate']) ? $_POST['birthDate'] : "";
    $birthLoc = isset($_POST['birthLoc']) ? $_POST['birthLoc'] : "";
    $poids = isset($_POST['poids']) ? $_POST['poids'] : "";
    $taille = isset($_POST['taille']) ? $_POST['taille'] : "";
    $sang = isset($_POST['sang']) ? $_POST['sang'] : "";
    $sql = "SELECT mail FROM users";
    $retourMail = $pdo->query($sql);
    $mail = $retourMail->fetch();
    $erreurs = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthDate = test_input($_POST["birthDate"]);
        $birthLoc = test_input($_POST["birthLoc"]);
        $poids = test_input($_POST["poids"]);
        $taille = test_input($_POST["taille"]);
        $sang = test_input($_POST["sang"]);
    }
    if (!(mb_strlen($birthLoc) >= 2 && ctype_alpha($birthLoc)))
        array_push($erreurs, "Veuillez saisir votre lieu de naissance.");
    if (count($erreurs) > 0) {
        $message = "<ul>";
        $i = 0;
        while ($i < count($erreurs)) {
            $message .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }
        $message .= "</ul>";
        echo $message;
        include "formRenseignement.php";
    } else {
        $sql = "SELECT COUNT(*) FROM users WHERE mail='". $mail["mail"] . "'";
        $nombreOccurences = $pdo->query($sql)->fetchColumn();
        if ($nombreOccurences <= 5) {
            $sql = "INSERT INTO users
                (birthDate, birthLoc, poids, taille, sang)
                VALUES ('" . $birthDate . "', '" . $birthLoc . "', '" . $poids . "', '" . $taille . "', '" . $sang . "')";
            $query = $pdo->prepare($sql);
            $query->bindValue('birthDate', $birthDate, PDO::PARAM_STR);
            $query->bindValue('birthLoc', $birthLoc, PDO::PARAM_STR);
            $query->bindValue('poids', $poids, PDO::PARAM_STR);
            $query->bindValue('taille', $taille, PDO::PARAM_STR);
            $query->bindValue('sang', $sang, PDO::PARAM_STR);
            $query->execute();
        }
        else {
            echo $mail["mail"] . "</br>";
            echo "Vous avez déjà rempli des informations";
        }
    }
} else {
    require_once "formRenseignement.php";
}
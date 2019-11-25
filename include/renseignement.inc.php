<h1>Renseignements</h1>
<?php
if (isset($_POST['submitted'])) {
    $birthDate = isset($_POST['birthDate']) ? $_POST['birthDate'] : "";
    $birthLoc = isset($_POST['birthLoc']) ? $_POST['birthLoc'] : "";
    $poids = isset($_POST['poids']) ? $_POST['poids'] : "";
    $taille = isset($_POST['taille']) ? $_POST['taille'] : "";
    $sang = isset($_POST['sang']) ? $_POST['sang'] : "";
    $id_user = $_SESSION['login']['id'];

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
            $sql = "UPDATE users SET birthDate = :birthDate, birthLoc = :birthLoc, poids = :poids, taille = :taille, sang = :sang, modifiedAt = NOW() WHERE idUser = $id_user";
            $query = $pdo->prepare($sql);
            $query->bindValue(':birthDate', $birthDate, PDO::PARAM_STR);
            $query->bindValue(':birthLoc', $birthLoc, PDO::PARAM_STR);
            $query->bindValue(':poids', $poids, PDO::PARAM_INT);
            $query->bindValue(':taille', $taille, PDO::PARAM_INT);
            $query->bindValue(':sang', $sang, PDO::PARAM_STR);
            $query->execute();
    }
} else {
    require_once "formRenseignement.php";
}

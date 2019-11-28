<?php
if (isset($_POST['contact'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $objet = isset($_POST['objet']) ? $_POST['objet'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";
    $erreurs = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail = test_input($_POST["mail"]);
        $objet = test_input($_POST["objet"]);
        $message = test_input($_POST["message"]);
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "Veuillez saisir une adresse mail valide.");
    $erreurs = textValide($erreurs, $objet, 'objet', 2, 100);
    $erreurs = textValide($erreurs, $message, 'message', 2, 5000);
    if (count($erreurs) > 0) {
        $txt = "<ul>";
        $i = 0;
        while ($i < count($erreurs)) {
            $txt .= "<li>" . $erreurs[$i] . "</li>";
            $i++;
        }
        $txt .= "</ul>";
        echo $txt;
        include "formContact.php";
    } else {
            $sql = "INSERT INTO contact (mail, objet, message, createdAt) VALUES ( :mail, :objet, :message, NOW())";
            $query = $pdo->prepare($sql);
            $query->bindValue(':mail', $mail, PDO::PARAM_STR);
            $query->bindValue(':objet', ucfirst($objet), PDO::PARAM_STR);
            $query->bindValue(':message', ucfirst($message), PDO::PARAM_STR);
            $query->execute();
        }
    header('Location:index.php');
} else {
    require_once "formContact.php";
}

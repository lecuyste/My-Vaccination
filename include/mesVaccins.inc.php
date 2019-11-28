<?php

include('pdo.php');

//recuperer liste des vaccins selon id_user

$sql = "SELECT * FROM vaccins";
$query = $pdo->prepare($sql);
$query->execute();

$vaccins = $query->fetchAll();


$sql = "SELECT idUser FROM users";
$query = $pdo->prepare($sql);
$query->execute();

$users = $query->fetch();

if (!empty($_POST['submitted'])) {

    $id_user = $_SESSION['login']['id'];
    $id_vaccin = $_POST['nomVaccin'];
    $dateInjection = $_POST['dateInjection'];


    $sql = "INSERT INTO user_vaccin VALUES ('', :id_user, :id_vaccin, :dateInjection, NOW())";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_user', $id_user, PDO::PARAM_INT);
    $query->bindValue(':id_vaccin', $id_vaccin, PDO::PARAM_INT);
    $query->bindValue(':dateInjection', $dateInjection, PDO::PARAM_STR);

    $query->execute();

}
?>
<div class="triche">

    <h1>Mes vaccins</h1>
    <h2> Ajouter un vaccin </h2>
    <form method="post" action="index.php?page=mesVaccins">
        <label for="selectNomVaccin"></label>

        <div class="vaccin">
            <table border="1" id="tableauVaccinEffectue">
                <tr>
                    <th> Nom Vaccin</th>
                    <th> Date d'injection</th>
                </tr>
                <tr>
                    <td><select name="nomVaccin" id="nomVaccin">
                            <?php foreach ($vaccins as $vaccin) {
                                echo '<option  value = "' . $vaccin['id_vaccin'] . '" >' . $vaccin['nom'] . '</option>';

                                if (!empty($_POST['nom'])) {

                                    if ($_POST['nom'] == $vaccin) {
                                        echo 'selected ="selected"';
                                    }
                                }
                            } ?>
                        </select></td>

                    <td><input type="date" name="dateInjection" id="dateInjection"></td>
                    <td><input type="submit" name="submitted"></td>
                </tr>
            </table>
        </div>
    </form>
</div>
<div class="triche">
    <h2>Vaccins effectués : </h2> </br>
    <?php
    $sql = "SELECT * FROM user_vaccin WHERE id_user = $id_user";
    $query = $pdo->prepare($sql);
    $query->execute();
    $id_join = $query->fetchAll();
    foreach ($id_join as $id_joins) {
        //echo $id_joins['id_vaccin'] . '<br>';
        $id_j = $id_joins['id_vaccin'];
        $sql = "SELECT * FROM vaccins WHERE id_vaccin = $id_j";
        $query = $pdo->prepare($sql);
        $query->execute();
        $nom_vac = $query->fetchAll();
        foreach ($nom_vac as $nom_vacs) {
            echo 'Le vaccin ' . $nom_vacs['nom'] . ' a été administré le : ' . strftime("%d %B %G", strtotime($id_joins['dateInjection'])) . '</br>';
        }
    } ?>
</div>





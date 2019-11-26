<?php

include ('pdo.php');




  //recuperer liste des vaccins selon id_user

$sql = "SELECT * FROM vaccins";
$query = $pdo->prepare($sql);
$query->execute();

$vaccins = $query->fetchAll();


$sql = "SELECT idUser FROM users";
$query = $pdo->prepare($sql);
$query->execute();

$users = $query->fetch();

?>
<?php
if (!empty($_POST['submitted'])) {

    $id_user = $_SESSION['login']['id'];
    $id_vaccin = $_POST['nomVaccin'];
    $dateInjection = $_POST['dateInjection'];


   // $nomVaccin = $_POST['nomVaccin'];

  //  $sql = "SELECT id_vaccin FROM vaccins WHERE nom=$nomVaccin" ;
  //  $query = $pdo->prepare($sql);
   // $query->execute();

  //  $id_vaccins = $query -> fetch();




    $sql = "INSERT INTO user_vaccin VALUES ('', :id_user, :id_vaccin, :dateInjection, NOW())";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id_user', $id_user, PDO::PARAM_INT);
    $query->bindValue(':id_vaccin', $id_vaccin, PDO::PARAM_INT);
    $query->bindValue(':dateInjection', $dateInjection, PDO::PARAM_STR);

    $query->execute();



}
?>

    <h1>Mes vaccins</h1>

    <h2>Vaccins effectués</h2>


<form method="post" action="index.php?page=mesVaccins">
<label for="selectNomVaccin"></label>

    <div class="vaccin">
        <table border="1" id="tableauVaccinEffectue">
            <tr>
                <th> Nom Vaccin </th>
                <th> Date d'injection</th>
            </tr>
            <tr>
      <td> <select name ="nomVaccin" id="nomVaccin">
              <?php foreach ($vaccins as $vaccin){
                  echo '<option  value = "'.$vaccin['id_vaccin'].'" >'.$vaccin['nom'].'</option>';

                  if(!empty($_POST['nom'])){

                      if($_POST['nom'] == $vaccin){
                          echo 'selected ="selected"';}
                  } } ?>
        </select>  </td>

                <td><input type="date"  name="dateInjection" id="dateInjection"></td>
                <td><input type="submit" name="submitted"></td>
            </tr>
        </table>


    </div>

</form>














    <h2>Mes prochains vaccins</h2>

<table>

    <tr>
        <th> Nom </th>
        <th> Maladie </th>
    </tr>
    <tr>

        <td></td>

        <td></td>
        <td></td>
    </tr>

</table>





<h2>Calendrier vaccinal 2019</h2>



<h3>2 MOIS</h3>
    <ul>
        <li>Diphtérie, Tétanos, Coqueluche, Poliomyélite, infections invasives à Haemophilus influenzae b : 1ère dose</li>
        <li>Hépatite B : 1ère dose</li>
        <li>Vaccination obligatoire depuis le 1er janvier 2018</li>

        <li> Infections invasives à Pneumocoques : 1ère dose</li>
        <li>Vaccination obligatoire depuis le 1er janvier 2018</li>
    </ul>
<br>
   <h3>4 MOIS</h3>
    <ul>
        <li>Diphtérie, Tétanos, Coqueluche , Poliomyélite, infections invasives à Haemophilus influenzae b : 2e dose</li>
        <li> Hépatite B : 2ème dose</li>
        <li>Infections invasives à Pneumocoques : 2ème dose</li>
        <br>
        <h3>5 MOIS</h3>
        <li>Infections invasives à Méningocoque du sérogroupe C : 1ère dose</li>
        <li>Vaccination obligatoire depuis le 1er janvier 2018</li>
    </ul>
<br>
   <h3> 11 MOIS</h3>
    <ul>
        <li> Diphtérie, Tétanos, Coqueluche, Poliomyélite, infections invasives à Haemophilus influenzae b : 1er rappel </li>
        <li> Hépatite B : 1er rappel</li>
        <li>Infections invasives à Pneumocoques : rappel</li>
    </ul>
<br>
   <h3> 12 MOIS</h3>
        <li>Rougeole, Oreillons, Rubéole : 1ère dose</li>
        <li>Infections invasives à Méningocoque du sérogroupe C : 2ème dose</li>
<br>
    <h3> ENTRE 16 ET 18 MOIS</h3>
    <ul>
        <li> Rougeole, Oreillons, Rubéole : 2ème dose</li>
    </ul>
<br>
<h3>6 ANS</h3>
<ul>
    <li>Diphtérie, Tétanos, Coqueluche, Poliomyélite : 2ème rappel</li>
</ul>
    <br>
  <h3>  ENTRE 11 ET 13 ANS</h3>
<ul>
    <li>Diphtérie*, Tétanos, Coqueluche*, Poliomyélite : 3ème rappel</li>

*avec un vaccin contenant des doses réduites d’anatoxine diphtérique et d’antigène coquelucheux.
</ul>
<br>
<h3>ENTRE 11 ET 14 ANS</h3>
<ul>
   <li>Infections à papillomavirus humains : 2 doses espacées de 6 mois.</li>
    <li> Un rattrapage est prévu entre 15 et 19 ans révolus pour  les jeunes filles non encore vaccinées.</li>
    </ul>
<br>
<h3> JUSQU'À 15 ANS</h3>
<ul>
    <li>Hépatite B</li>

    En rattrapage, pour les adolescents âgés de 11 à 15 ans révolus, non antérieurement vaccinés :
<br>
    - soit selon le schéma classique à trois doses,
<br>
    - soit selon un schéma à deux doses espacée au minimum de 6 mois (avec le vaccin ENGERIX® B20 μg).
</ul>
<br>
   <h3> APRÈS 18 ANS</h3>
<ul>
    <li>Diphtérie*, Tétanos, Poliomyélite : les rappels sont désormais recommandés à 25 ans, 45 ans, 65 ans, puis tous le 10 ans à partir de 65 ans.</li>
    *avec un vaccin contenant une dose réduite d’anatoxine diphtérique.

    <li>Coqueluche*</li>
    1 (seule) dose* :  à l’occasion du rappel de 25 ans si la personne n’a pas été vaccinée depuis  5 ans ; un rattrapage peut être fait jusqu'à l'âge de 39 ans.</li>

    * avec un vaccin quadrivalent contenant des doses réduites d’anatoxine diphtérique et d’antigène coquelucheux

    <li>Infections invasives à Méningocoque du sérogroupe C</li>
    1 dose : en rattrapage jusqu’à 24 ans, pour les personnes non vaccinées antérieurement.

    <li>Rougeole, Oreillons, Rubéole</li>
    Les personnes nées depuis 1980 devraient avoir reçu au total deux doses de vaccin trivalent, en respectant un délai minimum d’un mois entre les deux doses, quels que soient les antécédents vis à vis des trois maladies.

    <li> Grippe</li>
    A partir de 65 ans, une injection annuelle de vaccin grippal est recommandée systématiquement à toute la population.

    <li> Zona</li>
    1 (seule) dose : la vaccination est recommandée chez les adultes âgés de 65 à 74 ans révolus, y compris chez les sujets ayant déjà présenté un ou plusieurs épisodes de zona.
</ul>



<div class="triche">
    <table border="1">
    <CAPTION> liste des vaccins </CAPTION>
    <tr>
        <th> Nom </th>
        <th> Maladie </th>

    </tr>

    <?php
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=my_vaccination', 'root', '', $pdo_options);


        // On recupere tout le contenu de la table news
        $reponse = $bdd->query('SELECT nom, maladie, obligation FROM vaccins');

// On affiche le resultat
        while ($donnees = $reponse->fetch())
        {
            //On affiche les données dans le tableau

            if ($donnees["obligation"]==1) {
                echo '<tr style="background-color:darkred">';
            }
            echo "<td> $donnees[nom] </td>";
            echo "<td> $donnees[maladie] </td>";
            echo "</tr>";
        }
        echo "Rouge = obligatoire en France.";
        $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>

</table>
</div>



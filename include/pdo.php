<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=my_vaccination',
        'root',
        '',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            //PDOStatement::query()
        ));
}
catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
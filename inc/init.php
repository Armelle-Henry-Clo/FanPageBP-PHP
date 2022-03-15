<?php

$pdo = new PDO('mysql:host=localhost;dbname=blackPink', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// initiation de la session
session_start();


// chemin du site
define('SITE', '/blackPink-ArmelleHENRY/');

// variable d'affichage

$contenu = '';

function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function executeRequete($requete, $param = array())
{
    // le parametre $requete recoit une requete sql. Le parametre $param recoit un tableau avec les marqueurs associés à leur valeur

    $order=false;

    // Echappement des données avec htmlspecialchars() :
    foreach ($param as $marqueur => $valeur) {

        if ($marqueur==':amount'):

          $order=true;
        endif;
            $param[$marqueur] = htmlspecialchars($valeur);



        // on transforme les chevrons en entité html qui neutralise les balises <style> et <script> eventuellement injectées en formulaire. Evite les failles XSS et CSS

    }

    global $pdo; // permet d'acceder à la variable $pdo de manière globale

    $resultat = $pdo->prepare($requete);// on prepare la requete reçu

          //die(var_dump($id));
    $success = $resultat->execute($param);// on execute en lui passant le tableau des marqueurs associés à leur valeur
    if ($order):
        $id=$pdo->lastInsertId();

    endif;
    // execute() renvoie toujours un booleen: true en cas de succes et false en cas d'echec

    if ($success) { // si $success == true donc que la requete a fonctionné
     if ($order):
        return $id;
     else:
         return $resultat;
     endif;

    } else {

        return false;

    }
}


;?>

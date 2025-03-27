<?php

// Ce fichier va permettre de définir des informations 
// Permettant à PDO de créer une connexionà la BDD

const HOST = "localhost:3306";
const DB_NAME = "camping";
const USER = "root";
const PASSWORD = "";

// Fonction permettant de créer et retourner une connexion à la BDD

function creerConnexion(): PDO
{
    try {
        $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo; // $connexion est une variable de type PDO
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

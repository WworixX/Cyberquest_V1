<?php
// Informations de connexion à la base de données
$host = 'localhost'; // Serveur MySQL local
$dbname = 'cyberquest'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur par défaut sous XAMPP
$password = ''; // Pas de mot de passe sous XAMPP

try {
    // Connexion à la base avec PDO (mode sécurisé)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Activer l'affichage des erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

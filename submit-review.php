<?php
require_once 'database.php';

$pdo = creerConnexion();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et nettoyer les données du formulaire
    $id_utilisateur = htmlspecialchars($_POST['id_utilisateur']);
    $commentaire = htmlspecialchars($_POST['commentaire']);
    
    // Optionnel: Ajouter une date
    $date_avis = date('Y-m-d H:i:s');
    
    try {
        // Préparer la requête SQL
        $stmt = $pdo->prepare("INSERT INTO avis (id_utilisateur, commentaire, date_avis) VALUES (:id_utilisateur, :commentaire, :date_avis)");
        
        // Exécuter la requête avec les paramètres
        $stmt->execute([
            ':id_utilisateur' => $id_utilisateur,
            ':commentaire' => $commentaire,
            ':date_avis' => $date_avis  // J'ai ajouté ce paramètre manquant
        ]);
        
        // Rediriger vers la page du formulaire avec un message de succès
        header('Location: index.php?success=1');  // J'ai changé pour index.php (à adapter)
        exit();
    } catch (PDOException $e) {
        die("Erreur lors de l'enregistrement de l'avis: " . $e->getMessage());
    }
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    session_start(); // Démarrage de la session

// Si le panier n'existe pas encore dans la session, on le crée
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// Ajout de l'article au panier
$id_article = peanuts nuts; // ID de l'article à ajouter
$qte_article = 1; // Quantité de l'article à ajouter
$_SESSION['panier'][$id_article] = $qte_article;

session_start(); // Démarrage de la session

// Si le panier existe dans la session, on l'affiche
if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
    foreach ($_SESSION['panier'] as $id_article => $qte_article) {
        // Affichage des informations de l'article (à remplacer par votre propre code)
        echo "Article ID : $id_article, quantité : $qte_article<br>";
    }
} else {
    echo "Le panier est vide";
}
    </div>
</section>
<?php require 'inc/foot.php'; ?>

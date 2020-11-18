<?php $id = 'ETAT DES FRAIS ENGAGES';?>

<?php ob_start(); ?>
<header>
    <p>A retourner accompagné des justificatifs au plus tard le 10 du mois qui suit l’engagement des frais</p>
</header>
<div id="contenu">
    <div id="infoVisiteur">
        <h5>Visiteurs</h5>
        <p><?php $matricule ?></p><br><!--ID du visiteur-->
        <p><?php $nomVisiteur . $prenomVisiteur ?></p><br> <!-- Nom du visiteur-->
        <h5>Mois</h5>
        <p><?php $moisSelectionner ?></p> <!-- Affiche le mois selectionner par l'utilisateur-->
    </div> <!-- fin info visiteur-->
    <div id="affichageFrais">

    </div>

</div>

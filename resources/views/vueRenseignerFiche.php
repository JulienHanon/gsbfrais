<?php?>
<div id="contenu">
    <form action="" method="GET">
        <label for="nuitee">Saisir frais de nuitee : </label>
        <input type="number" name="nuitee" id="nuitee">
    </form>
    <form action="" method="get">
        <label for="repasMidi">Saisir frais du repas de midi</label>
        <input type="number" name="repasMidi" id="repasMidi">
    </form>
    <form action="" method="get">
        <label for="kilometrage">Saisir frais du kilométrage</label>
        <input type="number" name="kilometrage" id="kilometrage">
    </form>
    <form action="" method="get"> <!-- Facultatif (si l'utilisateur n'a pas de frais supplementaire il doit pouvoir sauvegarder en laissant vide)-->
        <label for="fraisSupp">Saisir frais supplementaire</label>
        <input type="number" name="fraisSupp" id="fraisSupp">
    </form>
    <form action="" method="get"> <!-- Facultatif (si l'utilisateur n'a pas de frais supplementaire il doit pouvoir sauvegarder en laissant vide)-->
        <label for="fraisSuppLib">Saisir libellé du frais supplementaire</label>
        <input type="text" name="fraisSuppLib" id="fraisSuppLib">
    </form>
    <button type="submit">Sauvegarder</button>
    <button type="reset">Effacer</button>
</div>


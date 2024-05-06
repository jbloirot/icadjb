<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<title>ICAD \ Nouveau proprietaire</title>

<body>

    <form method="POST" action="/proprietaires/newproprietairepost">
        <ul>
            <li> Nom : <input type="text" name='nom' required="required" placeholder="Nom..."></li>
            <li> Prénom : <input type="text" name='prenom' required="required" placeholder="Prénom..."></li>
            <li> Adresse Email : <input type="email" name='mail' required="required" placeholder="Adresse Email...">
            <li> Adresse : <input type="text" name='adresse' required="required" placeholder="Adresse..."></li>
            <li> Code Postal : <input type="text" name='cp' required="required" placeholder="Code Postal..."></li>
            <li> Ville : <input type="text" name='ville' required="required" placeholder="Ville..."></li>
            <li> Téléphone : <input type="tel" name='phone' required="required" placeholder="Numéro de téléphone...">
            </li>
        </ul>
        <input type="submit" value="Créer le propriétaire">
        <input type="reset" value="Annuler">
        </ul>
    </form>
</body>
<?= $this ->endSection() ?>

</html>
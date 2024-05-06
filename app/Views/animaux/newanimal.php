<?= $this->extend('/templates/layout') ?>
<?= $this->section('head') ?>
<title>ICAD \ Nouvel animal</title>

<body>

    <form method="POST" action="/animaux/newanimalpost" enctype="multipart/form-data">
        <ul>
            <input type="file" name="img" enctype="multipart/form-data">
            <li> Numéro ICAD <input type="text" name='icad' required="required" minlength="15" maxlength="15"
                    placeholder="Icad..."></li>
            <li> Nom : <input type="text" name='nom' required="required" placeholder="Nom..."></li>
            <li> Date de naissance : <input type="date" name='date' required="required" placeholder="Date..."></li>
            <li><label for="">Sexe : </label>
                <select name="sexe">
                    <option value="Mâle">Mâle</option>
                    <option value="Femelle">Femelle</option>
                </select>
            </li>
            <li><label for="">Espèce : </label>
                <select name="espece">
                    <option value="Chien">Chien</option>
                    <option value="Chat">Chat</option>
                    <option value="Furet">Furet</option>
                </select>
            </li>
            <li> Race : <input type="text" name='race' required="required" placeholder="Race..."></li>
            <li> Description : <input type="textarea" name='description' required="required"
                    placeholder="Description..."></li>
        </ul>
        <li><label for="">Proprietaire : </label>
            <select name="proprietaire">
                <?php
                foreach ($ListeProprietaires as $key => $value) {
                    ?>
                    <option value="<?= $value['IDPROPRIETAIRE']; ?>">
                        <?= $value['NOMPROPRIO'] . " " . $value['PRENOMPROPRIO'] ?>
                    </option>
                <?php
                }
                ?>



            </select>
            <br><br><a class="btn-secondary btn text-center" href="<?php echo base_url('/proprietaires/newproprietaire'); ?>">Créer proprietaire</a><br>
            <br>
            </ul>
            <ul>
                <input type="submit" value="Créer l'animal">
                <input type="reset" value="Annuler">
            </ul>
    </form>
</body>
<?= $this->endSection() ?>

</html>
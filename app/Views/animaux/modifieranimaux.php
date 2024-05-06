<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<title>ICAD \ Modifier animal</title>

<body>
    <script>

    </script>
    <form method="POST" action="/animaux/editpost" enctype="multipart/form-data">
        <table>
        <label>Photo de l'animal :  </label> 
        <input type="file" name="img"  value="" <br><br>
            <label>Numéro ICAD </label>
            <input type="text" name='icad' readonly="readonly" value="<?= $Animal['NUMEROICAD']; ?>"> <br>
            <label>Nom : </label>
            <input type="text" required="required" name="NomAnimal" value="<?= $Animal['NOMANIMAL']; ?>" <br><br>
            <label>Date de naissance : </label>
            <input type="date" required="required" readonly="readonly" name="DateNaissanceAnimal"
                value="<?= $Animal['DATENAISSANCEANIMAL']; ?>" <br><br>
            <label>Sexe : </label>
            <input type="text" required="required" readonly="readonly" name="SEXEANIMAL"
                value="<?= $Animal['SEXEANIMAL']; ?>" <br><br>
            <label>Espece : </label>
            <input type="text" required="required" readonly="readonly" name="EspeceAnimal"
                value="<?= $Animal['ESPECEANIMAL']; ?>" <br><br>
            <label>Race : </label>
            <input type="text" required="required" readonly="readonly" name="RaceAnimal" value="<?= $Animal['RACEANIMAL']; ?>" <br><br>
            <label>Description : </label>
            <input type="textarea" required="required" name="DescriptionAnimal"
                value="<?= $Animal['DESCRIPTIONANIMAL']; ?>" <br><br>
            <input type="hidden" name="IdAnimal" value="<?= $Animal['IDANIMAL']; ?>">
            <label for="">Proprietaire : </label>

            <select name="proprietaire">

                    <?php
                    foreach ($ListeProprietaires as $key => $value) 
                        
                        if ($value['IDPROPRIETAIRE'] == $Animal['IDPROPRIETAIRE'] ) {
                            ?>
                            <option value="<?= $value['IDPROPRIETAIRE']; ?>">
                            <?= $value['NOMPROPRIO'] . " " . $value['PRENOMPROPRIO'] ?> 
                            <?php
                        }

                        foreach ($ListeProprietaires as $key => $value) 
                            if ($value['IDPROPRIETAIRE'] != $Animal['IDPROPRIETAIRE'] ) {
                            ?>
                    <option value="<?= $value['IDPROPRIETAIRE']; ?>">
                        <?= $value['NOMPROPRIO'] . " " . $value['PRENOMPROPRIO'] ?>
                    </option>
                    <?php } ?>

        </table>
        <input type="submit" value="Modifier l'animal">

    </form>
</body>
<?= $this ->endSection() ?>

</html>
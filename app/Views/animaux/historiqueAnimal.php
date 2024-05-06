<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('/templates/layout') ?>
<?= $this->section('head') ?>
<title>ICAD \ Historique animal</title>

<body>



    <table class="table table-dark" align="center">
        <tr>
            <th scope="col" >Date historique</th>
            <th scope="col" >Nom animal</th>
            <th scope="col" >Numero Icad</th>
            <th scope="col" >Datenaisseance animal</th>
            <th scope="col" >Sexe animal</th>
            <th scope="col" >Espece animal</th>
            <th scope="col" >Race animal</th>
            <th scope="col" >Description animal</th>
            <th scope="col" >Etat animal</th>
        </tr>

        <?php



            foreach ($listeAnimaux as $key => $value) { ?>
                <tr>
                    <td> <?= $value['DATE_HISTO'] ?> </td> 
                    <td> <?= $value['NOMANIMAL'] ?> </td> 
                    <td> <?= $value['NUMEROICAD'] ?> </td> 
                    <td> <?= $value['DATENAISSANCEANIMAL'] ?> </td> 
                    <td> <?= $value['SEXEANIMAL'] ?> </td> 
                    <td> <?= $value['ESPECEANIMAL'] ?> </td> 
                    <td> <?= $value['RACEANIMAL'] ?> </td> 
                    <td> <?= $value['DESCRIPTIONANIMAL'] ?> </td> 
                    <td> <?= $value['ETATANIMAL'] ?> </td> 
                    <!-- <td> <img width = 150px height = 150px src="data:image/*;base64,<?= base64_encode($value['IMGANIMAL']); ?>"/> </td> -->
                    

            <?php }
        
        ?>
    </table>

</body>
<?= $this->endSection() ?>

</html>
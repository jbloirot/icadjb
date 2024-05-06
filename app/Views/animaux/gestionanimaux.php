<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<title>ICAD \ Gestion proprietaires</title>

<body>

    <script language='javascript'>
        function confirmer() {
            confirmation = confirm("Voulez-vous vraiment supprimer cet animal ?");
            if (!confirmation) {
                event.preventDefault(); // Empêche la soumission du formulaire si l'utilisateur annule
            }
        }
    </script>

    <a href="<?php echo base_url('/animaux/newanimal'); ?>"><button class="btn btn-secondary btn text-center ">Créer animal</button></a>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
    if ($listeAnimaux == null) {
        echo "Créez des animaux pour les gérer ici";
    } else {
        foreach ($listeAnimaux as $key => $value) { ?>
              <div class="p-2">
        <div  class="card" style="width: 20rem;">
        <div class = "card-img-top object-fit-cover"  height="150px">
  <img class="card-img-top object-fit-cover" style="object-fit: cover;" height="150px" src="data:image/*;base64,<?= base64_encode($value['IMGANIMAL']); ?>">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $value['NOMANIMAL']; ?></h5>
    <p class="card-text"><?= $value['DESCRIPTIONANIMAL']; ?></p>
  </div>
  <div class="card-body">
  </form>
                        <a name="modifier" href="<?php echo base_url('/animaux/historique/' . $value['IDANIMAL']); ?>"><button type="button" class="btn btn-dark">Historique</button></a>
                        <a name="modifier" href="<?php echo base_url('/animaux/edit/' . $value['IDANIMAL']); ?>"><button type="button" class="btn btn-dark">Modifier</button></a>
                    <form method="post" action="/animaux/delete">
<button type="submit" name="supprimer" onclick="confirmer()" class="btn btn-danger" value="<?= $value['IDANIMAL'] ?>">Supprimer</button></td>
                    </form>
                    <form action="/animaux/etatpost" method="post">
                            <select name="etat" id="">
                                <option value="">
                                    <?= $value['ETATANIMAL'] ?>
                                </option>
                                <?php if ($value['ETATANIMAL'] != "RAS") {
                                    ?>
                                    <option value="RAS">RAS</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Perdu") {
                                    ?>
                                    <option value="Perdu">Perdu</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Trouvé") {
                                    ?>
                                    <option value="Trouvé">Trouvé</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Volé") {
                                    ?>
                                    <option value="Volé">Volé</option>
                                    <?php } ?>

                                    <input type="hidden" name="IdAnimal" value="<?= $value['IDANIMAL']; ?>">
                                </select>

                            <input type="submit" value="Valider">

                        </form>
                    </div>
  </div>
</div>
   <?php } } ?>
   </div>
</body>
<?= $this ->endSection() ?>
<?php ?>

</html>
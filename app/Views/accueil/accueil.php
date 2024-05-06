<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<title>ICAD \ Accueil</title>

<body>
<form action="/icadpost" method="post">
<div class="input-group mb-3">
  <input type="text" class="form-control" name="icad" placeholder="Numero icad..." aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <input type="submit" class="btn btn-outline-secondary" value="Envoyer numéro Icad">
  </div>
</div>
</form>
</body>
</html>
<?= $this ->endSection() ?>

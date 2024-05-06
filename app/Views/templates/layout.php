<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css"/>


</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img  height="80" src="https://static.wixstatic.com/media/7b6ee2_3370582aa89f4ffcae86dcb59f4e6f91~mv2.png/v1/fit/w_2500,h_1330,al_c/7b6ee2_3370582aa89f4ffcae86dcb59f4e6f91~mv2.png" alt="">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?= base_url('')?>" class="nav-link px-2 text-white">Accueil</a></li>
          <li><a href="<?= base_url('animaux')?> " class="nav-link px-2 text-white">Mes Animaux</a></li>
          <li><a href="<?= base_url('proprietaires')?>" class="nav-link px-2 text-white">Mes Proprietaires</a></li>
        </ul>

        <div class="text-end">
          <?php
          if (session() -> get('NomUser')) {
            ?>
            <p  class="btn btn-outline-secondary" ?><?= session() -> get('PrenomUser') . " " . session() -> get('NomUser') ?></p>
            <form action="/login/deconnexion" method="post">
    <button class="btn btn-secondary btn text-center " type="submit" name="signout" method="post">Se deconnecter</button>
    </form>
            <?php } 
            else {
              ?> <a href="<?= base_url('/login')?>"><button type="button" class="btn btn-secondary btn text-center " ?>Se connecter</button></a>
<?php
            } ?>



        </div>
      </div>
    </div>
  </header>
<body>
<div class="container">
<?= $this->renderSection('head')?>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 " style ="background-color:#272727">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2023 ICAD, Inc</span>
    </div>
  </footer>
</div>
</body>
</html>
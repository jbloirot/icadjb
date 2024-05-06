<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<title>ICAD \ Connexion</title>

<body>
    <ul>
        <form action="/loginpost" method="post">
            <li><input type="email" name="email"required="required" placeholder="Adresse Email..."></li>
            <li><input type="password" name="password"required="required" minlength="12" maxlength="30" placeholder="Mot de passe..."></li>
            <input type="submit" name="connexion" value="Se connecter" >
        </form>
    </ul>
</body>
<?= $this ->endSection() ?>

</html>
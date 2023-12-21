<?php

namespace App\Controllers;


class Accueil extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('accueil/accueil');
        echo view('templates/footer');
    
    } 
}
?>
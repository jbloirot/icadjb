<?php

namespace App\Controllers;

use App\Models\Utilisateur;

class New_User extends BaseController
{
    public function index(): string
    {

        return view('admin/new_user');

    }
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function create(): string
    {
        $utilisateur = new Utilisateur();
        $password = $this->hash_password(($this->request->getPost('password')));
        $data = $utilisateur->where('EMAILUSER', $this->request->getPost('mail'))->first();
        if ($data) {
            echo "Adresse Email déjà utilisée";
            return view('admin/new_user');
        } else {
            $salut = [
                'NomUser' => $this->request->getPost('nom'),
                'PrenomUser' => $this->request->getPost('prenom'),
                'MotDePasseUser' => $password,
                'EmailUser' => $this->request->getPost('mail'),
                'FonctionUser' => $this->request->getPost('fonction'),
                'AdresseUser' => $this->request->getPost('adresse'),
                'VilleUser' => $this->request->getPost('ville'),
                'CodePostalUser' => $this->request->getPost('cp'),
                'TelephoneUser' => $this->request->getPost('phone'),
            ];
            $utilisateur->insert($salut);
            return view('admin/new_user');
        }


    }
 

}
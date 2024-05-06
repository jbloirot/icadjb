<?php

namespace App\Controllers;
use App\Models\Animal;

class Accueil extends BaseController
{
    public function index()
    {
        return view('accueil/accueil');
    
    } 
    public function icadPost()
    {
        $animal = new Animal();
        $etat = ['EtatAnimal' => "Trouvé"];
        $data['Animal'] = $animal->where('NumeroIcad',$this->request->getPost('icad') )->first();
        if (isset($data['Animal']['ETATANIMAL']) &&  $data['Animal']['ETATANIMAL'] == "Trouvé") {
            echo ("Animal déja déclaré comme trouvé");
            return view('accueil/accueil');
        }
        if ($data['Animal'] !== null) {
            $animal->update($data['Animal']['IDANIMAL'], $etat);
            echo ("L'Animal a été déclaré comme trouvé");
            return view('accueil/accueil');
        }
        else {
            echo ("Numéro ICAD incorrect ou animal non existant sur le site");
            return view('accueil/accueil');
        }
    
    } 

}
?>
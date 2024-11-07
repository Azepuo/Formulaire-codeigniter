<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller {

    public function index() {
        // Charger la vue du formulaire de connexion
       return view('login_form');
    }

    public function submit() {
        // Récupérer les données du formulaire
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // les infos 
        $validUsername = 'admin';
        $validPassword = 'password';

       
        if ($username === $validUsername && $password === $validPassword) {
            echo "Bienvenue, $username ! Vous êtes connecté avec succès.";
        } else {
            return view('login_form', [
                'error' => 'Nom d\'utilisateur ou mot de passe incorrect.'
            ]);
        }
    }
}

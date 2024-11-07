<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller {

    public function index() {
        // Charger la vue du formulaire sans erreurs de validation
        echo view('contact_form');
    }

    public function submit() {
        // Charger les services nécessaires
        $validation = \Config\Services::validation();

        // Définir les règles de validation
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'message' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation échouée, passez les erreurs à la vue
            return view('contact_form', [
                'validation' => $validation
            ]);
        } else {
            // Validation réussie, traitez les données du formulaire
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $message = $this->request->getPost('message');

            // Exemple de traitement des données
            echo "Merci, $name. Votre message a été envoyé avec succès !";
        }
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller {

    public function index() {
        
        return view('contact_form');
    }

    public function submit() {
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'message' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('contact_form', [
                'validation' => $validation
            ]);
        } else {
            
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $message = $this->request->getPost('message');

            
            echo "Merci, $name. Votre message a été envoyé avec succès !";
        }
    }
}

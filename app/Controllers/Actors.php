<?php

namespace App\Controllers;

use App\Models\Users\M_users; 
use App\Models\Actors\M_actors; 
use App\Models\Countries\M_countries; 

class Actors extends BaseController
{
    public function index()
    {
        
        echo loadViews('actors/add-actors');
    }

    public function add_actors()
    {
        //Actúa para añadir y para guardar esta función
        helper(['url', 'form']);

        $M_countries = new M_countries; 
        $validation = \Config\Services::validation();

        $data['paises'] = $M_countries->findAll();
        
        $validation->setRules(
        [
            "name" => "required" , 
            'description' => "required|min_length[50]", 
            'country' => "required", 
        ], 
        [
            "name" => 
            [
                'required' => "El nombre del actor es obligatorio."
            ], 
            'description' => 
            [
                'required' => 'Es obligado añadir una descripción.', 
                'min_length' => 'La descripción debe ocupar mínimo 50 caracteres.'
            ], 
            'country' => 
            [
                'required' => 'Seleccione un país'
            ],
        ]);
        
        if($_POST)
        {
            if(!$validation->withRequest($this->request)->run())
            {
                $errors = $validation->getErrors();
                print_r($errors);
            }else
            {
                echo "Correcto!"; 
            }
        }

        $data_header['title_page'] = "Añadir actor";

        echo loadViews('actors/add-actors', $data_header, $data);
    }
}

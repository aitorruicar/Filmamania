<?php

namespace App\Controllers;

use App\Models\Users\M_users; 
use App\Models\Actors\M_actors; 
use App\Models\Countries\M_countries; 

class Actors extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('actors'); 
        $builder->select('*');
        $data['actors'] = $builder->get()->getResultArray();
        $data_header['title_page'] = "Actores";
        echo loadViews('actors/index', $data_header, $data);
    }

    public function add_actors()
    {
        //Actúa para añadir y para guardar esta función
        helper(['url', 'form']);

        $M_countries = new M_countries;
        $M_actors = new M_actors();  
        $validation = \Config\Services::validation();

        $data['paises'] = $M_countries->findAll();
        
        $validation->setRules(
        [
            "name" => "required" , 
            'description' => "required|min_length[10]", 
            'country' => "required",
            'image' => 'is_image[image]' 
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
            'image' =>
            [
                'is_image' => 'El archivo tiene que ser una imagen'
            ]
        ]);
        
        if($_POST)
        {
            if(!$validation->withRequest($this->request)->run())
            {
                $errors = $validation->getErrors();
                print_r($errors);
            }else
            {
                $file = $this->request->getFile('image');
                if($file->isValid())
                {
                    $file->move(WRITEPATH.'uploads');
                    
                }
                
                $_POST['image'] = $file->getName();
                $M_actors->insert($_POST); 
                
                return redirect()->to(base_url().'/actors');
            }
        }

        $data_header['title_page'] = "Añadir actor";

        echo loadViews('actors/add-actors', $data_header, $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\Users\M_users; 
use App\Models\Actors\M_actors; 

class Home extends BaseController
{
    public function index()
    {
        
        echo loadViews();
    }

    protected function insertarUsuario()
    {
        $M_users = new M_users(); 

        $new_user = array
        (
            'name' => 'root', 
            'username' => 'root', 
            'password' => 'root', 
            'role' => 1
        );

        $M_users->insert($new_user);
    }
}

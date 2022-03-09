<?php

namespace App\Models\Users; 
use CodeIgniter\Model; 

class M_users extends Model
{
    protected $table = 'users'; 
    protected $primaryKey = 'id'; 
    
    protected $returnType = 'array'; 
    protected $useSoftDeleted = true; 

    protected $allowedFields = array
    (
        'name', 
        'username', 
        'password', 
        'role'
    );
}


?>
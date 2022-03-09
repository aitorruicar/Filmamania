<?php

namespace App\Models\Countries; 
use CodeIgniter\Model; 

class M_countries extends Model
{
    protected $table = 'countries'; 
    protected $primaryKey = 'id'; 
    
    protected $returnType = 'array'; 
    protected $useSoftDeleted = true; 

    protected $allowedFields = array
    (
        'iso', 
        'name', 
    );
}


?>
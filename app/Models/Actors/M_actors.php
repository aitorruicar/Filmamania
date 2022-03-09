<?php

namespace App\Models\Actors; 
use CodeIgniter\Model; 

class M_actors extends Model
{
    protected $table = 'actors'; 
    protected $primaryKey = 'id'; 
    
    protected $returnType = 'array'; 
    protected $useSoftDeleted = true; 

    protected $allowedFields = array
    (
        'name', 
        'description', 
        'country', 
        'image'
    );
}


?>
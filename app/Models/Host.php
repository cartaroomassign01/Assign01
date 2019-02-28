<?php

namespace App\Models;

use CodeIgniter\Model;

class host extends Model {

    protected $table = 'host';
    protected $primaryKey = 'id';
    protected $allowedFields = ['companyName', 'address', 'email'];
    protected $validationRules = [
        'companyName' => 'required|alpha_numeric',
        'address' => 'alpha_numeric',
        'email' => 'max_length[20]'
    ];

}

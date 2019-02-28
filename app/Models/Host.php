<?php

namespace App\Models;

use CodeIgniter\Model;

class Host extends Model {

    protected $table = 'host';
    protected $primaryKey = 'id';
    protected $allowedFields = ['companyName', 'address', 'email'];
    protected $validationRules =
        [
            'companyName' => 'required|alpha_numeric|max_length[32]',
            'address' => 'required|max_length[64]',
            'email' => 'required|valid_email|max_length[32]'
        ];

    protected $validationMessages =
        [
            'address' =>
                [
                    'is_uniqure' => 'Sorry, another business already exists at this location.'
                ],
            'companyName' =>
                [
                    'is_unique' => 'Sorry, this company already exists'
                ],
            'email' =>
                [
                    'is_unique' => 'Sorry, this email is already taken'
                ]
        ];

}
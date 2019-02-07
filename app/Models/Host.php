<?php

namespace App\Models;

use CodeIgniter\Model;

class Host extends Model
{
    /*These are the data variables*/
    protected $id = 'id';
    protected $company = 'company';
    protected $address = 'address';
    protected $email = 'email';

    /*This is the sample data*/
    protected $data = [
        'Host' => ['id' => '1', 'company' => 'Waves Coffee', 'address' => '12233 44ave Surrey,BC', 'email' => 'WavesCoffee@gmail.com'],
        'Host' => ['id' => '2', 'company' => 'Vancouver Public Library', 'address' => '23344 55ave Vancouver,BC', 'email' => 'VPL@gmail.com'],
        'Host' => ['id' => '3', 'company' => 'Richmond Public Library', 'address' => '34455 66ave Richmond,BC', 'email' => 'RPL@gmail.com'],
        'Host' => ['id' => '4', 'company' => 'Beans Coffee', 'address' => '45566 77ave Coquitlam,BC', 'email' => 'BeansCoffee@gmail.com'],
        'Host' => ['id' => '5', 'company' => 'Apex Buildings', 'address' => '56677 88ave Burnaby,BC', 'email' => 'ApexBuildings@gmail.com'],
        'Host' => ['id' => '6', 'company' => 'Fleetwood Park Secondary', 'address' => '67788 99ave Surrey,BC', 'email' => 'FPS@gmail.com']
    ];

    /*Function to find a specific host*/
    public function find($id = null)
    {
        return $this->data[$id];
    }

    /*Function to find all host*/
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}

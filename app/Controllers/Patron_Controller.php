<?php
/*
Created By: Erwin Berceles
Patron Controller accessing the Patron model
 */

namespace App\Controllers;

use App\Models\Patron;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Patron_Controller extends Controller
{
    use ResponseTrait;

    //Function that shows data based on an ID
    public function show($id)
    {
        $patron_model = new Patron();
        $patrons = $patron_model->find($id);
        return $this->respond($patrons, 200);
    }

    //Function that displays all data
    public function index()
    {
        $patron_model = new Patron();
        $patrons = $patron_model->findAll();
        return $this->respond($patrons, 200, 'Got Response OK 200 from show function');
    }

    //Edit not implemented
    public function edit()
    {
        return $this->fail(["Not Implemented"], 200);
    }
    //Edit not implemented
    function new () {

        return $this->fail(["Not Implemented"], 200);
    }
    //Edit not implemented
    public function create()
    {

        return $this->fail(["Not Implemented"], 200);
    }
    //Edit not implemented
    public function update()
    {

        return $this->fail(["Not Implemented"], 200);
    }
    //Edit not implemented
    public function delete()
    {

        return $this->fail(["Not Implemented"], 200);
    }
}

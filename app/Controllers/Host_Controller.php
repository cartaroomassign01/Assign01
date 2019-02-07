<?php

namespace App\Controllers;

use App\Models\Host;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Host_Controller extends Controller
{
    use ResponseTrait;

    /*Function that displays a specific host given an ID*/
    public function show($id)
    {
        $model = new Host();
        $host = $model->find($id);
        return $this->respond($host, 200, 'Object found(Host)');
    }

    /*Function that all rooms in the database(default)*/
    public function index()
    {
        $model = new Host();
        $host = $model->findAll();
        return $this->respond($host, 200, 'Object found(Host)');
    }

    /*Not implemented*/
    function new () {
        $this->fail(["Not used"], 418);
    }

    /*Not implemented*/
    public function edit()
    {
        $this->fail(["Not used"], 418);
    }

    /*Not implemented*/
    public function create()
    {
        $this->fail(["Not used"], 418);
    }

    /*Not implemented*/
    public function update()
    {
        $this->fail(["Not used"], 418);
    }

    /*Not implemented*/
    public function delete()
    {
        $this->fail(["Not used"], 418);
    }
}

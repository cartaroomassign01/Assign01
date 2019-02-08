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
   public function edit($id)
   {

       return $this->fail(["Not Implemented"], 200);
   }

   /*Not implemented*/
   public function new () {

       return $this->fail(["Not Implemented"], 200);
   }

   /*Not implemented*/
   public function create()
   {

       return $this->fail(["Not Implemented"], 200);
   }

   /*Not implemented*/
   public function update($id)
   {
        echo "abcd";
       return $this->fail(["Not Implemented"], 200);
   }

   /*Not implemented*/
   public function delete($id)
   {

       return $this->fail(["Not Implemented"], 200);
   }
}

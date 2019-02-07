<?php

namespace App\Controllers;

use App\Models\Room;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Student_Controller extends Controller
{
    use ResponseTrait;

    /*Show specific room info based on roomNo*/
    public function show($roomNo)
    {
        $model = new Room();
        $room = $model->find($roomNo);
        return $this->respond($room, 200, 'Object found(Room)');
    }

    /*Show all room info from room model*/
    public function index()
    {

        $model = new Room();
        $room = $model->findAll($roomNo);
        return $this->respond($room, 200, 'Object found(All Room)');

    }

    /*Not implemented*/
    public function edit()
    {

        return $this->fail(["Not Implemented"], 200);
    }

    /*Not implemented*/
    function new () {

        return $this->fail(["Not Implemented"], 200);
    }

    /*Not implemented*/
    public function create()
    {

        return $this->fail(["Not Implemented"], 200);
    }

    /*Not implemented*/
    public function update()
    {

        return $this->fail(["Not Implemented"], 200);
    }

    /*Not implemented*/
    public function delete()
    {

        return $this->fail(["Not Implemented"], 200);
    }
}

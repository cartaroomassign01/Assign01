<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\host;
use CodeIgniter\API\ResponseTrait;

class hostPresenter extends Controller {

    use ResponseTrait;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
        parent::initController($request, $response, $logger);
        $this->host = new host();
    }

    public function index() {
        return view('the_host',['records'=>$this->host->findAll()]);
    }

    // show a block
    public function show($id) {
        return view('one_host',['record'=>$this->host->find($id)]);
   }
    
    // present a block for editing
    public function edit($id) {
        return view('edit_host',['record'=>$this->host->find($id)]);
    }
    // process a block update
    public function update($id) {
        // extract data from form (request->getVar)
        // run the validation, against blocks->getValidationRules
        // if ok, blocks->update($data)b&Bshow success?
        // else redisplay the form with errors
        return 'ok';
    }
    //--------------------------------------------------------------------
}

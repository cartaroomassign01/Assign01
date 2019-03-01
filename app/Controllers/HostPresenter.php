<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Host;
use CodeIgniter\API\ResponseTrait;

class HostPresenter extends Controller {

    use ResponseTrait;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
        parent::initController($request, $response, $logger);
        $this->host = new Host();
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
         $this->host->update(
         $id,
         [
            'companyName'  => $this->request->getVar('companyName'),
             'address'  => $this->request->getVar('address'),
             'email'  => $this->request->getVar('email'),
        ]);
         
        return view('the_host',['records'=>$this->host->findAll()]);
    }
    //--------------------------------------------------------------------
}

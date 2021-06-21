<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIcontroller extends ResourceController
{
    protected $modelName = 'App\Models\HeroeModelo';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    
}
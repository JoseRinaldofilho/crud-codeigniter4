<?php
namespace App\Controllers;
use App\Models\ClienteModel;
class Home extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('pages/home');
        echo view('common/footer');
    }
    
}

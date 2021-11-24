<?php 
namespace App\Controllers;

use App\Models\TelefoneModel;
use CodeIgniter\Controller;

class Telefone extends Controller{

    public function index()
    {
        $telefone = new TelefoneModel();

        dd($telefone->findAll());
    }

}
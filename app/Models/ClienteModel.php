<?php 
namespace App\Models;
use CodeIgniter\Model;
class ClienteModel extends Model{
    protected $table      = 'cliente';   
    // protected $primaryKey = 'id';
    /**
     * metodo que requer os dados obrigatorio none, email
     */
     protected $allowedFields = [
        'nome',
        'email'
     ];
}
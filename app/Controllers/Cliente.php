<?php 
namespace App\Controllers;
use App\Models\ClienteModel;
use CodeIgniter\Controller;
class Cliente extends Controller{
    /**
     * chama a view de lsitagem de cliente
     */
    public function index()
    {
        $clienteModel = new ClienteModel();
        $cliente = $clienteModel->findAll();
        echo view('common/header');
        echo view('pages/cliente/cliente', [
            'clientes' => $cliente
        ]);
        echo view('common/footer');
    }
    /**
     * chama a view de cadastro de  cliente
     */
    public function create() // views que cham o dormulario
    {
        helper('form'); //toda vez que usa form_opne tem que chamar o healper('form');
        echo view('common/header');
        echo view('pages/cliente/formulario_cliente');
        echo view('common/footer');
    }
    /**
     * metodo de salva o cline  no banco de dados
     */
    public function store()
    {
       
        $post = $this->request->getPost();
            
        $clienteModel = new ClienteModel();

        if ($clienteModel->save($post)) {
            // chama uma mensagem
          
            echo "Cliente Salvo com sucesso! <br><br><hr>";
            echo anchor('/cliente', 'Voltar') ;
           
        }else{
            echo 'Erro ao salvar'. $post ;

        }
    }
    /**
     * chama a edição com o cliente carregado 
     */
    public function edit($id)
    {
        // antes de ediar temos qeu chamar o model cliente(banco)
        $clienteModel = new ClienteModel();
            // find vai busca um registro nesa casso id que e uma chave  primaryKey
        $dadosCliente = $clienteModel->find($id);
      //se for nullo $var siginifica qeu nao encontou o cliente  
       if (is_null($dadosCliente)) {
          echo 'Erro Cliente nao encontrado '. $id ;
       }

       helper('form'); //toda vez que usa form_opne tem que chamar o healper('form');
       echo view('common/header');
       echo view('pages/cliente/formulario_cliente', [
           'dadosCliente' => $dadosCliente
       ]);
       echo view('common/footer'); 


    }
    public function delete($id)
    {
        $clienteModel = new ClienteModel();

        if ($clienteModel->delete($id)) {
           echo "Excluido com sucesso <br><hr>";
           echo anchor('/cliente', 'Voltar') ;
         
        }



    }
    
}
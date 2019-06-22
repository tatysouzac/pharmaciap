<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class funcionarios extends CI_Controller {


	public function index(){  

		$this->load->model('Usuarios_model');

        $dados['funcionarios'] = $this->Usuarios_model->listarFuncionarios();
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/mostrar_funcionarios', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
        
        }

    public function excluir($id){
		$this->load->model("Usuarios_model");
        $this->Usuarios_model->excluir($id);
        header('Location: http://localhost/pharmaciap/funcionarios');
    }

	public function editar($id){
		$this->load->model("Usuarios_model");
        $result = $this->Usuarios_model->pegarFuncionario($id);


			$id = $result[0]['id'];
			$nome= $result[0]['nome'];
			$email= $result[0]['email'];
			$matricula = $result[0]['matricula'];
			$senha = $result[0]['senha'];

			$dados = array( 'id' => $id,'nome' => $nome, 'email' => $email, 'matricula' => $matricula, 'senha' => $senha);
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/editar_funcionario', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
	}
    
    public function enviar_editar(){

			$id =$_POST["id"];
			$nome = $_POST["nome"];
			$email= $_POST["email"];
			$matricula = $_POST["matricula"];
			$senha = $_POST["senha_cliente"];

			$this->load->model("Usuarios_model");
			$this->Usuarios_model->editarCliente($_POST);
			header('Location: http://localhost/pharmaciap/funcionarios');

		}



}
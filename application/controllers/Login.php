<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{   
        $dados['titulo'] = "loginn CI Dota";

        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/login', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
    
        }
        //acessar a página com o cadastro criado
        
        public function logar(){

        //CARREGANDO MODEL

        $this->load->model("usuarios_model");

        //checar se informações inseridas estão no banco
        //logando pelo USARNEME
        $matricula = $this->input->post("matricula");
        $senha = md5($this->input->post("senha"));
        //depois de montar matricula e senha JOGA PARA UMA VARIAVEL @USUARIO
        $usuario = $this->usuarios_model->logarUsuario($matricula, $senha);
        //verificando se usuario existe
        if($usuario){
                //LOGAR ***** SET_USERDATA
                $this->session->set_userdata("usuario_logado", $usuario);
                //direcionando para a página desse usuario
                //pode usar para logar na página de admin ou usuario
                $this->session->set_flashdata("success", "logado com sucesso!");
                redirect('/');
        }else{
                $this->session->set_flashdata("danger", "usuario ou senha inválidos");
                redirect('login');
        }
}
        //FUNÇÃO DE LOGOUT
        public function logout(){
                //DESLOGAR UNSET_USERDATA
                $this->session->unset_userdata("usuario_logado");
                $this->session->set_flashdata("success", "Deslogado com sucesso");
                redirect('/');

        }

        
}

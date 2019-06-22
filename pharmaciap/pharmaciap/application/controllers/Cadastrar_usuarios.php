<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_usuarios extends CI_Controller {

        //Todo método que for criado a baixo vai ser chamado nesse construtor
        // assim nao precisa fazer $this->load->model em todos o métodos
       /* public function _construct(){
                parent::_construct();
                $this->load->model("usuarios_model");
        }*/

	public function index()
	{   
        $dados['titulo'] = "Cadastro de usuarios";

        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/cadastro_usuarios', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
        }
        //inserindo novo cadastro : USAR PARA UPLOAD DE IMAGEM
        public function novo(){
                
                $usuario = array(

                        "nome" => $this->input->post("nome"),
                        "email" => $this->input->post("email"),
                        "matricula" => $this->input->post("matricula"),
                        "senha" => md5($this->input->post("senha")),
                );

                $this->load->model("usuarios_model");

                if(!$this->usuarios_model->verificarUsuario($usuario['matricula'])){
                //inserindo no banco o cadastro usuarios
                $this->usuarios_model->cadastra_usuario($usuario);
                //inserindo mensagem
                $this->session->set_flashdata("success", "usuario cadastrado com sucesso");
                //após o cadastro a página retorna para esse tela"cadastra_usuarios"
                redirect('cadastrar-usuarios');
                }
                else{
                        $this->session->set_flashdata("danger", "usuario já cadastrado");
                        redirect('cadastrar-usuarios');
                }
        }

        }

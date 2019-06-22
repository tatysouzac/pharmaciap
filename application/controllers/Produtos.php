<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {



	public function index(){  

        $dados['titulo'] = "Produtos - PHarmaciaP";
        //listando fotos na página de produtos
        $dados['produtos'] = $this->produtos_model->listarProdutos();
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/produtos', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
        
        }
        
        public function formulario(){

        $dados['titulo'] = "Produtos - PHarmaciaP";
        //listando fotos na página de produtos
        $dados['categorias'] = $this->categorias_model->listarCategorias();
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/formulario_produtos', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
        }

        public function novo(){
                if($this->produtos_model->cadastrar_produtos($_POST)){
                        $this->session->set_flashdata("sucess", "Produto cadastrado com sucesso");
                        redirect('produtos');   
                }
                else{
                        $this->session->set_flashdata("danger", "errroooooooooou");
                        redirect('formulario');
                }
        }

         public function excluir($id){
                $this->load->model("Produtos_model");
                $this->produtos_model->excluir($id);
                header('Location: http://localhost/pharmaciap/produtos');
        }

        public function editar($id){
        
        $this->load->model("Produtos_model");
        $result = $this->Produtos_model->pegarProduto($id);


            $id = $result[0]['id'];
            $nome= $result[0]['nome'];
            $preco= $result[0]['preco'];


            $dados = array( 'id' => $id,'nome' => $nome, 'preco' => $preco);
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/editar_produtos', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);
    }

        public function enviar_editar(){

            $id =$_POST["id"];
            $nome = $_POST["nome"];
            $preco= $_POST["preco"];

            $this->load->model("Produtos_model");
            $this->Produtos_model->editarProduto($_POST);
            header('Location: http://localhost/pharmaciap/produtos');

        }
}

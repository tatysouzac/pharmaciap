<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
	public function index(){   

        $this->load->model("produtos_model");

        $dados['titulo'] = "Home CI Dota";
        $dados['produtos'] = $this->produtos_model->destaques();
        
        //verificando se as informações estão chagando do BANCO DE DADOS
        /*
        echo "<pre>";
        print_r($dados);
        echo "<pre>";
        exit;
        */
        
        $this->load->view('templates/header', $dados);
        $this->load->view('templates/nav-top', $dados);
        $this->load->view('pages/index', $dados);
        $this->load->view('templates/footer', $dados);
        $this->load->view('templates/js', $dados);

	}
}

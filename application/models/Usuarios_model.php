<?php

class Usuarios_model extends CI_Model{

    //pega tudo no métoo post e manda para tabela usuarios
        public function cadastra_usuario($usuario){
            //inserindo no bando usuario
            $this->db->insert("usuarios_tb", $usuario);
        }

        
        public function logarUsuario($matricula, $senha){
            //depois de pegar ele no metedo post
            //chegar ele no banco de dados e trazer
            $this->db->where("matricula", $matricula);
            $this->db->where("senha", $senha);
            //montando usuario
            // onde matricula for igual name e senha igual senha (row_array) = pegando somente uma linha
            $usuario =$this->db->get("usuarios_tb")->row_array();
            return $usuario;
        }
        
        public function verificarUsuario($matricula){
            $this->db->where("matricula", $matricula);
            return $this->db->get('usuarios_tb')->row_array();
    }

    public function listarFuncionarios(){

        $this->db->where('status', 1);
        $this->db->where('nivel', 1);
        return $this->db->get("usuarios_tb")->result_array();
    }

    public function excluir($id){
            $this->db->set('status', 0);
            $this->db->where('id', $id);
            $this->db->update('usuarios_tb');     
    }

    public function pegarFuncionario($id){
        $this->db->where('id', $id);
        return $this->db->get("usuarios_tb")->result_array();

    }

    function editarCliente($enviar){
        
        $array = array('nome' => $enviar['nome'],
            'email' => $enviar['email'],
            'matricula' => $enviar['matricula'],
            'senha' => $enviar['senha'] );
            
            $this->db->set($array);
            $this->db->where('id', $enviar['id']);
            $this->db->update('usuarios_tb', $array);     
    }
}
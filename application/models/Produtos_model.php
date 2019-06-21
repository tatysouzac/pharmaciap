<?php

class Produtos_model extends CI_Model{

    //fotos da home
    public function destaques(){
        
        //limite de fotos que aparecem na home
        $this->db->limit(8);
        //ordenando por data de forma decrescente
        $this->db->order_by("data_cadastro", "DESC");
        return $this->db->get("produtos_tb")->result_array();
    }
 
    public function listarProdutos(){

        $this->db->where('status', 1);
        return $this->db->get("produtos_tb")->result_array();
    }
    
    public function cadastrar_produtos($params){

        $dados['nome'] =$params['nome'];
        $dados['categoria_id'] =$params['categoria_id'];
        $dados['preco'] =$params['preco'];
        $dados['usuario_id'] =$params['usuario_id'];

        //inserindo foto
        //local onde vai ser armazenada
        $config['upload_path'] = 'assets/images/produtos';
        //formatos das imagens
        $config['allowed_type'] = 'gif|jpeg|jpge|png';
        //removendo espaços
        $config['remove_spaces'] = true;

        //usando biblioteca de upload
        $this->load->library('upload', $config);

        if($this->upload->do_upload('nome_imagem')){
            $error = array('error' => $this->upload->display_errors());
            //carregando outra página
            $this->load->view('pages/formulario_produtos', $error);
        }
       else{
            $dados['nome_imagem'] = $this->upload->data('file_name');
        return $this->db->insert('produtos_tb', $dados);
    }

}

function excluir($id){
            $this->db->set('status', 0);
            $this->db->where('id', $id);
            $this->db->update('produtos_tb');     
    }
}
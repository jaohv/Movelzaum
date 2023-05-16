<?php
require_once "../Model/movel.php";

class MovelController
{

    public function execute($post, $get)
    {
        $acao = $get['acao'];
        if ($acao == "doar") {
            $movel = new Movel();
            
            $nome = $post["nome"];
            $movel->__set("nome", $nome);

            $condicao = $post["condicao"];
            $movel->__set("condicao", $condicao);

            $telefone = $post["telefone"];
            $movel->__set("telefone", $telefone);

            $endereco = $post["endereco"];
            $movel->__set("endereco", $endereco);

            $descricao = $post["descricao"];
            $movel->__set("descricao", $descricao);

            if ($movel->salvar() == true) {
                $retorno = ["msg" => "Doação feita com sucesso!", "erro" => "0", "url" => "../principal.php"];
                echo json_encode($retorno);
            } else {
                $retorno = ["msg" => "Erro ao fazer a doação!", "erro" => "1"];
                echo json_encode($retorno);
            }
       
            
        } 
        else if ($acao == "listar") {
            $this->listarMoveis();
        }
         else if ($acao == "editar") {
            $id = $get["id"];
          
            $dados = $movel->buscarPorId($id);

            require_once("../view//editar.php");
        
        } else if ($acao == "logout") {
            session_start();
            unset($_SESSION);
            session_destroy();

            header("location:../view/login.php");
        } else if ($acao == "deletar") {
            $id = $get["id"];
            $usuario = new Usuario();
            $dados = $usuario->deletar($id);

            $this->listarUsuarios();
        }

        if ($acao == "atualizar") {
            $movel = new Movel();

            $nome = $post["nome"];
            $movel->__set("nome", $nome);

            $condicao = $post["condicao"];
            $movel->__set("condicao", $condicao);

            $telefone = $post["telefone"];
            $movel->__set("telefone", $telefone);

            $endereco = $post["endereco"];
            $movel->__set("endereco", $endereco);

            $descricao = $post["descricao"];
            $movel = $post["descricao"];
        }
    }
}


$controller = new MovelController();
$controller->execute($_POST, $_GET);

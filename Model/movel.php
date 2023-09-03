<?php
require_once("../Infra/database.php");

class Movel
{
    private $id;
    private $nome;
    private $endereco;
    private $telefone;
    private $condicao;
    private $descricao;

    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        }
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        }
    }

    public function salvar()
    {
        $db = new Database();
        $con = $db->connect();

        $sql = "INSERT INTO movel (nome, endereco, telefone, condicao, descricao) 
                VALUES (:nome, :endereco, :telefone, :condicao, :descricao)";

        $st = $con->prepare($sql);
        $st->bindParam(':nome', $this->nome);
        $st->bindParam(':endereco', $this->endereco);
        $st->bindParam(':telefone', $this->telefone);
        $st->bindParam(':condicao', $this->condicao);
        $st->bindParam(':descricao', $this->descricao);
        $status = $st->execute();

        if ($status == true) {
            return true;
        }
    }


    public function deletar($id)
    {
        $db = new Database();
        $con = $db->connect();

        $sql = "DELETE FROM movel WHERE id = :id";
        $st = $con->prepare($sql);
        $st->bindParam(':id', $id);

        $status = $st->execute();

        $db->close();
        return  true;
    }

    public function atualizar()
    {
        $db = new Database();
        $con = $db->connect();

        $sql = "UPDATE usuario set nome = :nome, sobrenome = :sobrenome, email = :email, 
                    login = :login WHERE id = :id";

        $st = $con->prepare($sql);
        $st->bindParam(':nome', $this->nome);
        $st->bindParam(':sobrenome', $this->sobrenome);
        $st->bindParam(':email', $this->email);
        $st->bindParam(':login', $this->login);
        $st->bindParam(':id', $this->id);

        $status = $st->execute();


        if ($status == true) {
            return true;
        } else {
            return false;
        }
    }
}

<?php
require_once("../infra/database.php");

class Usuario
{
    private $id;
    private $datanascimento;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    private $perfil;

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

        $sql = "INSERT INTO usuario(datanascimento, nome, email, senha, endereco, perfil) 
                VALUES (:datanascimento, :nome, :email, :senha, :endereco, :perfil)";

        $st = $con->prepare($sql);
        $st->bindParam(':datanascimento', $this->datanascimento);
        $st->bindParam(':nome', $this->nome);
        $st->bindParam(':email', $this->email);
        $st->bindParam(':senha', $this->senha);
        $st->bindParam(':endereco', $this->endereco);
        $st->bindValue(':perfil', 1);
        $status = $st->execute();

        if ($status == true) {
            return true;
        }
    }


    public function deletar($id)
    {
        $db = new Database();
        $con = $db->connect();

        $sql = "DELETE FROM usuario WHERE id = :id";
        $st = $con->prepare($sql);
        $st->bindParam(':id', $id);

        $status = $st->execute();

        $db->close();
        return  true;
    }


    public function autenticar($login, $senha)
    {
        $senha_cripto = hash("sha3-256", $senha);
        $database = new Database();
        $con = $database->connect();

        $sql = "SELECT id, login FROM usuario WHERE login = :login AND senha = :senha";

        $st = $con->prepare($sql);
        $st->bindParam(':login', $login);
        $st->bindParam(':senha', $senha_cripto);
        $retorno = $st->execute();
        $dados = $st->fetchAll();

        if (sizeof($dados) == 1) {
            return true;
        } else {
            return false;
        }
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

<?php

class Usuario 
{
    // Criar propriedades da entidade no Banco de Dados
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $token;

    // Construtor com as propriedades obrigatórias a um usuário
    public function __construct($id, $nome, $senha, $email, $token)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->token = $token;        
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getToken() {
        return $this->token;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    // Opcionalmente, criar o ToString() da classe
}
?>

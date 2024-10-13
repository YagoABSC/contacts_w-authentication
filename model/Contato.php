<?php

class Contato
{
    // Atributos da classe Contato
    private $id;
    private $nome;
    private $telefone;
    private $email;

    // Construtor para inicializar os atributos do contato
    public function __construct($id, $nome, $telefone, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // Opcional: método toString() para facilitar a exibição dos dados do contato
    public function __toString()
    {
        return "ID: {$this->id}, Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email}";
    }
}
?>

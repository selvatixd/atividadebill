<?php
$gatinho = new Gato("Gordinho", 8, "SRD");
echo $gatinho->mensagem();
class Gato{
    private $nome;
    private $idade;
    private $raca;
    public function __construct($nome, $idade, $raca)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;
    }

    public function mensagem() {
        return "Meu nome é {$this->nome}tenho {$this->idade} anos sou da raça {$this->raca}.";
    }
}
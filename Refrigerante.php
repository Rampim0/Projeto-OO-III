<?php
require_once 'Bebida.php';

class Refrigerante extends Bebida {
    private $retornavel;

    public function __construct($nome, $preco, $retornavel) {
        parent::__construct($nome, $preco);
        $this->retornavel = $retornavel;
    }

    public function getRetornavel() {
        return $this->retornavel;
    }

    public function setRetornavel($retornavel) {
        $this->retornavel = $retornavel;
    }

    public function mostrarBebida() {
        return "Refrigerante: $this->nome, Preço: $this->preco, Retornável: " . ($this->retornavel ? "Sim" : "Não");
    }

    public function verificarPreco($preco) {
        return $preco < 5;
    }
}
?>

<?php
require_once 'Bebida.php';

class Suco extends Bebida {
    private $sabor;

    public function __construct($nome, $preco, $sabor) {
        parent::__construct($nome, $preco);
        $this->sabor = $sabor;
    }

    public function getSabor() {
        return $this->sabor;
    }

    public function setSabor($sabor) {
        $this->sabor = $sabor;
    }

    public function mostrarBebida() {
        return "Suco: $this->nome, Preço: $this->preco, Sabor: $this->sabor";
    }

    public function verificarPreco($preco) {
        return $preco < 2.5;
    }
}
?>

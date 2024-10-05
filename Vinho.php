<?php
require_once 'Bebida.php';

class Vinho extends Bebida {
    private $safra;
    private $tipo;

    public function __construct($nome, $preco, $safra, $tipo) {
        parent::__construct($nome, $preco);
        $this->safra = $safra;
        $this->tipo = $tipo;
    }

    public function getSafra() {
        return $this->safra;
    }

    public function setSafra($safra) {
        $this->safra = $safra;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function mostrarBebida() {
        return "Vinho: $this->nome, Preço: $this->preco, Safra: $this->safra, Tipo: $this->tipo";
    }

    public function verificarPreco($preco) {
        return $preco < 25;
    }
}
?>

<?php
require_once 'classes/Bebida.php';
require_once 'classes/Vinho.php';
require_once 'classes/Refrigerante.php';
require_once 'classes/Suco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    switch ($tipo) {
        case 'vinho':
            $safra = $_POST['safra'];
            $tipo_vinho = $_POST['tipo_vinho'];
            $bebida = new Vinho($nome, $preco, $safra, $tipo_vinho);
            break;
        case 'refrigerante':
            $retornavel = $_POST['retornavel'] == '1';
            $bebida = new Refrigerante($nome, $preco, $retornavel);
            break;
        case 'suco':
            $sabor = $_POST['sabor'];
            $bebida = new Suco($nome, $preco, $sabor);
            break;
    }

    echo $bebida->mostrarBebida();
}
?>

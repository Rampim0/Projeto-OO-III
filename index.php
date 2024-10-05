<?php
require_once 'classes/Bebida.php';
require_once 'classes/Vinho.php';
require_once 'classes/Refrigerante.php';
require_once 'classes/Suco.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Cadastrar Bebida</h1>
    <form action="processar.php" method="POST" id="formBebida">
        <label for="tipo">Tipo de Bebida:</label>
        <select name="tipo" id="tipo">
            <option value="vinho">Vinho</option>
            <option value="refrigerante">Refrigerante</option>
            <option value="suco">Suco</option>
        </select><br><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" required><br><br>

        <div id="vinho-info" style="display:none;">
            <label for="safra">Safra:</label>
            <input type="number" name="safra" required><br><br>

            <label for="tipo-vinho">Tipo:</label>
            <input type="text" name="tipo_vinho" required><br><br>
        </div>

        <div id="refrigerante-info" style="display:none;">
            <label for="retornavel">Retornável:</label>
            <select name="retornavel">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select><br><br>
        </div>

        <div id="suco-info" style="display:none;">
            <label for="sabor">Sabor:</label>
            <input type="text" name="sabor" required><br><br>
        </div>

        <input type="submit" value="Cadastrar">
    </form>

    <script>
        document.getElementById('tipo').addEventListener('change', function() {
            document.getElementById('vinho-info').style.display = this.value === 'vinho' ? 'block' : 'none';
            document.getElementById('refrigerante-info').style.display = this.value === 'refrigerante' ? 'block' : 'none';
            document.getElementById('suco-info').style.display = this.value === 'suco' ? 'block' : 'none';
        });
    </script>
</body>
</html>

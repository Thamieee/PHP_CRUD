<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");
    include('..\\session_start.php');
    $dao = new ProdutoDAO();

    $tabela = $dao->listar();
    if ($tabela) {
        echo " <h1> Lista de Produtos </h1><br/>";
        while ($linha = pg_fetch_array($tabela)) {

            echo "Codigo: $linha[0] Descricao: $linha[1] Preco: $linha[2]";
            
            echo '<form action="..\\controller\Controlador.php" method="get">';
                echo '<input type="text" hidden="true" name="txtCodigo" value="' . $linha[0] . '">';
                echo '<input type="text" hidden="true" name="txtDescricao" value="' . $linha[1] . '">';
                echo '<input type="text" hidden="true" name="txtPreco" value="' . $linha[2] . '">';
                // echo '<input type="text" disabled="true" name="txtCodigo" value="' . $linha[0] . '">';
                // echo '<input type="text" disabled="true" name="txtDescricao" value="' . $linha[1] . '">';
                // echo '<input type="text" disabled="true" name="txtPreco" value="' . $linha[2] . '">';
                echo '<input type="submit" name="b1" value="Adicionar">';
            echo '</form>';
        }
    } else
        echo "Tabela vazia.";
    ?>
</body>

</html>
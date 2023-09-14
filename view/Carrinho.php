<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");
    $dao = new ProdutoDAO();

    $tabela = $dao->listar();
    $soma = 0;
    if ($tabela) {
        echo " <h1> Carrinho </h1><br/>";
        while ($linha = pg_fetch_array($tabela)) {
            echo "Codigo: $linha[0] Descricao: $linha[1] Preco: $linha[2] <br/>";
            $soma = $soma + $linha[2];
        }
    } else
        echo "Tabela vazia.";
    echo "Valor total: $soma"
    ?>
</body>

</html>
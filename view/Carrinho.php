<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
</head>

<body>
    <?php
     include("..\\model\\Produto.php");
    session_start();
    $carrinho = $_SESSION['carrinho'];
    $soma = 0;
    if ($carrinho) {
        echo " <h1> Carrinho </h1><br/>";
        foreach ($carrinho as $produto) {
            echo "Codigo: " . $produto->getCodigo() . " | Descricao: " . $produto->getDescricao() . " | Preco: " . $produto->getPreco() . "<br/>";
            $soma = $soma + $produto->getPreco();
        }
    } else
        echo "Tabela vazia.";
    echo "<br/>Valor total: $soma";
    echo '<br/><br/><a href="..\\index.php" style="margin-right:5px"><button>Voltar</button></a>';
    echo '<a href="..\\view\\Listar.php"><button>Listar</button></a>';
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
</head>

<body>
    <?php
    include("..\\controller\\ProdutoDAO.php");

    session_start();

    if (isset($_SESSION['codigo'])) {
        $dao = new ProdutoDAO();
        $obj = new Produto();
        $obj->setCodigo($_SESSION['codigo']);
        $obj->setDescricao($_SESSION['descricao']);
        $obj->setPreco($_SESSION['preco']);
        $r = $dao->alterar($obj);

        if ($r > 0) {
            echo $obj->getDescricao() . " alterado com sucesso.";
        } else {
            echo "Nada foi alterado.";
        }
    } else
        echo 'Dados não foram recebidos.';

    echo '<br/><br/><a href="..\\index.php"><button>Voltar</button></a>';
    session_destroy();     
    ?>
</body>

</html>
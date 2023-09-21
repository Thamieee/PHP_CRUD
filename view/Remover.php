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
    $obj = new Produto();

    $obj->setCodigo($_GET['txtCodigo']);

    $r = $dao->remover($obj);

    if ($r > 0) {
        echo $obj->getDescricao() . " removido com sucesso.";
    } else {
        echo "Nada foi removido.";
    }
    echo '<br/><br/><a href="..\\index.php"><button>Voltar</button></a>';
    ?>
</body>

</html>
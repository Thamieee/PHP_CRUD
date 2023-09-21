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

    $obj->setDescricao($_GET['txtDescricao']);
    $obj->setPreco($_GET['txtPreco']);
    $r = $dao->gravar($obj);

    if ($r > 0) {
        echo $obj->getDescricao() . " salvo com sucesso.";
    } else {
        echo "Nada foi salvo.";
    }
    echo '<br/><br/><a href="..\\index.php"><button>Voltar</button></a>';
    ?>
</body>

</html>
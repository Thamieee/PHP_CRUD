<?php
$botao = strtolower(trim($_GET["b1"]));

switch ($botao) {
    case 'gravar':
        header("Location: ..\\view\Gravar.php?txtDescricao=" . $_GET["txtDescricao"] . "&txtPreco=" . $_GET["txtPreco"]);
        break;
    case 'listar':
        header("Location: ..\\view\Listar.php");
        break;
    case 'remover':
        header("Location: ..\\view\Remover.php?txtCodigo=" . $_GET["txtCodigo"]);
        break;
    case 'alterar':
        //passar campos via sessão
        session_start(); //inicia a sessão e viabiliza a $_SESSION
        $_SESSION['codigo'] = $_GET['txtCodigo'];
        $_SESSION['descricao'] = $_GET['txtDescricao'];
        $_SESSION['preco'] = $_GET['txtPreco'];
        header("Location: ..\\view\Alterar.php");
        break;
    case 'carrinho':
        header("Location: ..\\view\Carrinho.php");
        break;
}

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
    case 'adicionar':
        session_start();
        include("..\\model\\Produto.php");
        if(!isset($_SESSION['carrinho'])){
            $lista= array();    
        }else{
            $lista=$_SESSION['carrinho'];
        }
        $produto = new Produto();
        $produto->setCodigo($_GET['txtCodigo']);
        $produto->setDescricao($_GET['txtDescricao']);
        $produto->setPreco($_GET['txtPreco']);
        array_push($lista,$produto);
        //$_SESSION['carrinho'][] = serialize($produto);
        $_SESSION['carrinho'] = $lista;
        echo $produto->getDescricao() . " adicionado ao carrinho<br/><br/>";
        echo '<a href="..\\index.php" style="margin-right:5px;"><button>Voltar</button></a>';
        echo '<a href="..\\view\\Listar.php" style="margin-right:5px;"><button>Listar</button></a>';
        echo '<a href="..\\view\\Carrinho.php"><button>Carrinho</button></a>';
        break;
}

<?php
include("..\\model\\Banco.php");
include("..\\model\\Produto.php");

class ProdutoDAO
{

    public function gravar($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Insert into produto(descricao,preco) values('" . $obj->getDescricao() . "'," . $obj->getPreco() . ")");
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }

    public function listar()
    {
        $banco = new Banco();
        $tabela = pg_query($banco->conexao, "Select codigo,descricao,preco from produto order by 1 desc;");
        pg_close($banco->conexao);
        return $tabela;
    }

    public function remover($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Delete from produto where codigo = " . $obj->getCodigo());
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }
    public function alterar($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Update produto set descricao='" . $obj->getDescricao() . "', preco = " . $obj->getPreco() . " where codigo = " . $obj->getCodigo());
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }
}

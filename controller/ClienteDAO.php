<?php
include("..\\model\\Banco.php");
include("..\\model\\Cliente.php");

class ClienteDAO
{

    public function gravar($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Insert into cliente(nome,idade) values('" . $obj->getNome() . "'," . $obj->getIdade() . ")");
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }

    public function listar()
    {
        $banco = new Banco();
        $tabela = pg_query($banco->conexao, "Select codigo,nome,idade from cliente order by 2 desc;");
        pg_close($banco->conexao);
        return $tabela;
    }

    public function remover($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Delete from cliente where codigo = " . $obj->getCodigo());
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }
    public function alterar($obj)
    {
        $banco = new Banco();
        $resultado = pg_query($banco->conexao, "Update cliente set nome='" . $obj->getNome() . "', idade = " . $obj->getIdade() . " where codigo = " . $obj->getCodigo());
        $r = pg_affected_rows($resultado);
        pg_close($banco->conexao);
        return $r;
    }
}

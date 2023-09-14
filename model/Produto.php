<?php
class Produto {
    private $codigo;
    private $descricao;
    private $preco;

    public function setCodigo($c){
        $this->codigo=$c;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setDescricao($n){
        $this->descricao=$n;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setPreco($i){
        $this->preco=floatval(str_replace(",", ".", $i));
    }
    public function getPreco(){
        return $this->preco;
    }
}
?>

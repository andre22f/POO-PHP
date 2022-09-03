<?php
class Invoice {
  private $num_item;
  private $descricao;
  private $quantidade;
  private $preco_unitario;

  public function __construct($num_item, $descricao, $quantidade, $preco_unitario){
    $this->num_item = $num_item;
    $this->descricao = $descricao;

    if($quantidade < 0){
      $this->quantidade = 0;
    }else{
      $this->quantidade = $quantidade;
    }

    if($preco_unitario < 0){
      $this->preco_unitario = 0;
    }else{
      $this->preco_unitario = $preco_unitario;
    }
  }

  public function __get($name){
    return $this->$name;
  }

  public function __set($name, $value){
    $this->$name = $value;
  }

  public function getInvoiceAmount(){
    return $this->quantidade * $this->preco_unitario;
  }
}


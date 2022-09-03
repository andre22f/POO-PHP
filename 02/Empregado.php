<?php
class Empregado{
  private $primeiro_nome;
  private $sobrenome;
  private $salario_mensal;

  public function __construct($primeiro_nome, $sobrenome, $salario_mensal){
    $this->primeiro_nome = $primeiro_nome;
    $this->sobrenome = $sobrenome;

    if($salario_mensal < 0){
      $this->salario_mensal = 0;
    }else{
      $this->salario_mensal = $salario_mensal;
    }
  }

  public function __get($name){
    return $this->$name;
  }

  public function __set($name, $value){
    $this->$name = $value;
  }

  public function salario_anual(){
    return $this->salario_mensal * 12;
  }

  public function aumento_salario(){
    return $this->salario_mensal * 1.10;
  }
}
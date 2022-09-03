<?php
class Circulo{
  private $cordenada_x;
  private $cordenada_y;
  private $raio;

  public function __construct($cordenada_x, $cordenada_y, $raio){
    $this->cordenada_x = $cordenada_x;
    $this->cordenada_y = $cordenada_y;
    $this->raio = $raio;
  }

  public function __get($name){
    return $this->$name;
  }

  public function __set($name, $value){
    $this->$name = $value;
  }

  public function area_do_circulo(){
    return pi() * pow($this->raio, 2);
  }

  public function reduzir($value){
    return $this->raio - $value;
  }

  public function aumentar($value){
    return $this->raio + $value;
  }

  public function mover($value){
    $this->cordenada_x = $value;
    $this->cordenada_y = $value;
  }
}
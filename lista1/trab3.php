<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $Vmax;
    
    public function andar(){
        echo "acelerando";
    }
     public function frear(){
        echo "freando";
    }
    public function exibirCarro(){
         echo $this -> marca;
         echo $this -> modelo;
         echo $this -> ano;
         echo $this -> cor;
         echo $this -> Vmax;
    }

}

$c1 = new Carro();

$c1 -> marca = "toyota";
$c1 -> modelo = "corolla";
$c1 -> ano = "1966";
$c1 -> cor = "branco";
$c1 -> Vmax = "300kmh";

$c1->exibirCarro();
$c1->andar();
$c1->frear();
?>
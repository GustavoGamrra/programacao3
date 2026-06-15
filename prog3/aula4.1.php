<?php

class Funcionario {
    public string $nome;
    public float $salario;

    public function __construct(string $nome, float $salario){
        $this->nome = $nome;
        $this-> salario = $salario;
    }

  public function calcularBonus(): float {
            return $this->salario * 0.10;
    }

}

class Gerente extends Funcionario {

  public function calcularBonus(): float {
            return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario{
 public function calcularBonus(): float {
            return $this->salario * 0.15;
    }
}

$gerente = new Gerente ("joão", 20000);

$desenvolvedor = new Desenvolvedor("maria", 8000);

echo "nome: " . $gerente->nome . "\n";
echo "cargo: gerente\n";
echo "bônus" . $gerente->calcularBonus() . "\n\n";

echo "nome: " . $desenvolvedor->nome . "\n";
echo "cargo: desenvolvedor";
echo "bônus: ". $desenvolvedor->calcularBonus();







?>

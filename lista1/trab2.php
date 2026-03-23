<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $DTadm;

    public function exibirfuncionario(){

        echo $this -> nome;
         echo $this -> cargo;
          echo $this -> salario;
           echo $this -> DTadm;
    }
}

$fun = new Funcionario();

$fun -> nome = "roberto";
$fun -> cargo = "zelador";
$fun -> DTadm = "01/05/1999";
$fun -> salario = 1500 * 12;

$fun->exibirfuncionario();


?>
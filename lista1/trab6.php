<?php 

class Conta {
    public $numero;
    public $titular;
    public $saldo;
}

$conta1 = new Conta();
$conta1->numero = 123;
$conta1->titular = "João";
$conta1->saldo = 1000;

$conta1->saldo += 500; 
$conta1->saldo -= 300; 

echo "Conta: " . $conta1->numero . "<br>";
echo "Titular: " . $conta1->titular . "<br>";
echo "Saldo: R$ " . $conta1->saldo . "<br><br>";

$conta2 = new Conta();
$conta2->numero = 456;
$conta2->titular = "Maria";
$conta2->saldo = 2000;

$conta2->saldo += 200; 
$conta2->saldo -= 2500; 

echo "Conta: " . $conta2->numero . "<br>";
echo "Titular: " . $conta2->titular . "<br>";
echo "Saldo: R$ " . $conta2->saldo . "<br>";

?>
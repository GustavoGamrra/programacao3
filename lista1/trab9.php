<?php 

class Pessoa {
    public $nome;
    public $idade;
    public $genero;
}

$p1 = new Pessoa();
$p1->nome = "Carlos";
$p1->idade = 20;
$p1->genero = "Masculino";

$idadeMeses = $p1->idade * 12;
$idadeDias = $p1->idade * 365;

echo "Pessoa<br>";
echo "Nome: $p1->nome<br>";
echo "Idade: $p1->idade anos<br>";
echo "Gênero: $p1->genero<br>";
echo "Idade em meses: $idadeMeses<br>";
echo "Idade em dias: $idadeDias<br>";

?>
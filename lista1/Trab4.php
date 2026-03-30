<?php 

class Aluno {
    public $nome;
    public $numeroMatricula;
    public $mediaNotas;
    public $situacao;
}

$aluno1 = new Aluno();
$aluno1->nome = "Maria Silva";
$aluno1->numeroMatricula = 12345;
$aluno1->mediaNotas = 7.5;


if ($aluno1->mediaNotas >= 6) {
    $aluno1->situacao = "Aprovado";
} else {
    $aluno1->situacao = "Reprovado";
}

echo "Aluno: " . $aluno1->nome . "<br>";
echo "Matrícula: " . $aluno1->numeroMatricula . "<br>";
echo "Média das notas: " . $aluno1->mediaNotas . "<br>";
echo "Situação: " . $aluno1->situacao . "<br>";

?>
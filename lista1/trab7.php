<?php 

class Triangulo {
    public $lado1;
    public $lado2;
    public $lado3;
}

$tri1 = new Triangulo();
$tri1->lado1 = 6;
$tri1->lado2 = 6;
$tri1->lado3 = 6;

$area1 = ($tri1->lado1 * $tri1->lado2) / 2; 

echo "Triângulo 1<br>";
echo "Lados: $tri1->lado1, $tri1->lado2, $tri1->lado3<br>";
echo "Área: $area1<br>";

?>
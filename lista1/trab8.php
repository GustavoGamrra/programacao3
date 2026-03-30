<?php 

class Circulo {
    public $raio;
}

$circ1 = new Circulo();
$circ1->raio = 5;

$areaCirc = 3.14 * ($circ1->raio * $circ1->raio);
$perimetroCirc = 2 * 3.14 * $circ1->raio;

echo "Círculo<br>";
echo "Raio: $circ1->raio<br>";
echo "Área: $areaCirc<br>";
echo "Perímetro: $perimetroCirc<br>";

?>
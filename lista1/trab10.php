<?php 

class Produto {
    public $nome;
    public $preco;
    public $quantidade;
}

$prod1 = new Produto();
$prod1->nome = "Notebook";
$prod1->preco = 3000;
$prod1->quantidade = 10;

$prod1->quantidade += 5; 
$prod1->quantidade -= 3; 

echo "Produto<br>";
echo "Nome: $prod1->nome<br>";
echo "Preço: R$ $prod1->preco<br>";
echo "Quantidade: $prod1->quantidade<br>";

?>
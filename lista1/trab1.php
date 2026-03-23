<?php

class Livro {
    public $titulo;
    public $autor;
    public $Npg;
    public $ano;


    public function exibrlivro(){

       echo $this -> titulo;
       echo $this -> autor;
       echo  $this -> Npg;
       echo  $this -> ano;


    }

}

$livro = new Livro();

$livro->titulo = "compiuters";
$livro->autor = "gustavo";
$livro->Npg = "331";
$livro->ano = "2016";

$livro->exibrlivro();


?>
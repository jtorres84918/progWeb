<?php
class PrimeraClase
{
    //Definición de atributos, en PHP lo denominan "propiedades"
    private $nombre;


    //Declarando un constructor
    public function __construct($entradaNombre) {
        $this->nombre = $entradaNombre;
    }

    //Definición de métodos
    public function imprimirAlgo()
    {
        echo $this->nombre;
    }
}


//Instanciando objeto, como trabajo en clase debe instanciar el objeto desde el archivo index2.php
$objeto=new PrimeraClase("Condorito");
$objeto->imprimirAlgo();
?>
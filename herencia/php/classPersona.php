<?php
class Persona
{
    //Declaración de atributos clase Padre

    private $genero;
    private $nombre;
    private $apellido;
    private $edad;

    //Declaración de constructor
    public function __construct($entradaGenero,$entradaNombre,$entradaApellido,$entradaEdad) {
        $this->genero = $entradaGenero;
        $this->nombre = $entradaNombre;
        $this->apellido = $entradaApellido;
        $this->edad = $entradaEdad;
    }

    //Declaración de método en clase padre
    public function imprimirAtributos()
    {
        echo $this->genero."<br>";
        echo $this->nombre."<br>";
        echo $this->apellido."<br>";
        echo $this->edad."<br>";
    }
}
?>
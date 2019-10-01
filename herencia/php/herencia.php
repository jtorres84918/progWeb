
<?php

require("classPersona.php");

class Estudiante extends Persona
{
    
    //Declaración atributos propios de clase hijo
    private $universidad;
    private $asignatura;

    //Declarando un constructor
    public function __construct($entradaGenero,$entradaNombre,$entradaApellido,$entradaEdad,$entradauniversidad,$entradaasignatura) {
        
        parent::__construct($entradaGenero,$entradaNombre,$entradaApellido,$entradaEdad);
        //Atributos propios 
        $this->universidad = $entradauniversidad;
        $this->asignatura = $entradaasignatura;
    }

    public function getUniversidad()
    {
        echo $this->universidad."<br>";
    }

    public function getAsignatura()
    {
        echo $this->asignatura."<br>";
    }
}

//Instanciando objeto de la clase Estudiante
$objetoEstudiante = new Estudiante("Masculino","Condorito","Peladez","45","EAN","Programación WEb");

//llamado de método declarado en clase padre, desde un objeto tipo clase Estudiante (clase hijo)
$objetoEstudiante->imprimirAtributos();

//llamado de métodos propios de la clase hijo
$objetoEstudiante->getUniversidad();
$objetoEstudiante->getAsignatura();

?>

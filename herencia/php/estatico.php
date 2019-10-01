<?php
class FooFighters {

	public static $frontman="Dave Grohl";

    public static function concierto() {
        echo "Hoy (01/10/2019) se presentan en el Campín <br>";
    }
}

FooFighters::concierto();
echo "El Líder de la banda es:".FooFighters::$frontman."<br>"

//$nombre_clase = 'FooFighters';
//$nombre_clase::unMetodoEstatico(); // A partir de PHP 5.3.0
?>

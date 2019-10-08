<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Hola extends CI_Controller
{
        public function index()
        {
            echo 'Mi primer controlador en CodeIgniter!';
        }

        public function mensaje(){
      		echo 'Aquí se muestran los productos de ordenadores';
   		}

   		public function personajes($modelo){
   			if ($modelo=='Condorito')
   				echo "Condorito rules";
   			else
   				echo 'Estás viendo el personaje ' . $modelo;
		} 
}
?>
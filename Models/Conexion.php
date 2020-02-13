<?php

    class ConexionBaseDeDatos{
        private $con;

        public function __construct()
        {
            $this->con = new mysqli('localhost','root','','chagres');
        }

        public function get_titulos(){
            $query = $this->con->query('SELECT Nombre, descripcion FROM localidad WHERE id_Localidad=1');
            $retorno = []; 
             $i = 0;
 
             while($fila = $query->fetch_assoc()){
                 $retorno[$i] = $fila;
                 $i++;
             }
 
             return $retorno;
        }

    }
?>
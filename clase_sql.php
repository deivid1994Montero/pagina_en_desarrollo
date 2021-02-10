<?php
    class Clase_sql {
        private $bd;

        //Constructor
         public function __construct(){
            $this->bd = new mysqli(HOST, USER, PASS, DB);
        
        
        }
         public function ConsultaClientesG(){
            $resultado = $this->bd->query("SELECT * FROM clientes");
            return $resultado;
        }
         public function InsertarCliente($cedu, $nomb, $apel, $dire, $tele){
            $resultado = $this->bd->query("INSERT INTO clientes(cedula, nombres, 
            apellidos, direccion, telefono) VALUES('$cedu','$nomb','$apel','$dire','$tele')");
            return true; 
        }
            public function ConsultaProductos(){
            $resultado = $this->bd->query("SELECT * FROM productos");
            return $resultado;

        }
        public function InsertarProductos($codi, $desc, $pvpc, $pvpv, $cant, $obs, $codcat){
            $resultado = $this->bd->query("INSERT INTO productos(codigo, descripcion, precioc,
             preciov, cantidad, observacion, codigo_cat) VALUES('$codi', '$desc', '$pvpc', '$pvpv', '$cant', '$obs', '$codcat')");
            return true; 
        }
        
             public function ConsultaProveedores(){
             $resultado = $this->bd->query("SELECT * FROM proveedores");
             return $resultado;
        }
             public function InsertarProveedor($cedu, $nomb, $apel, $dire, $tele){
             $resultado = $this->bd->query("INSERT INTO proveedores(cedula, nombres, 
             apellidos, direccion, telefono) VALUES('$cedu','$nomb','$apel','$dire','$tele')");
             return true; 
        }
    
        public function ConsultaCategorias(){
       $resultado = $this->bd->query("SELECT * FROM categoria");
       return $resultado;
        }

        public function InsertarCategoria($codi, $desc){
            $resultado = $this->bd->query("INSERT INTO categoria(codigo_cat, descripcion) VALUES('$codi','$desc')");
            return true; 

        }
            public function ConsultaUsuario($usu,$cla){
            $resultado = $this->bd->query("SELECT * FROM usuarios WHERE usuario='$usu'
             AND clave= '$cla' AND estado = 1");
             return $resultado;
        
        }

    }
?>
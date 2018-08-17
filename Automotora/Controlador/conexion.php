<?php


class conexion {
    private $servidor="localhost";
    private $usuario="root";
    private $pass="";
    private $base="automotora";
    private $cone;
    
    function __construct() {
        try {
            $this->cone= mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->base);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    

    //insert delete update
    public function SqlOperation($sql){
        try {
            mysqli_query($this->cone, $sql);
            return mysqli_affected_rows($this->cone);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function SqlSelection ($sql){
        try {
            $reg= mysqli_query($this->cone, $sql);
            return $reg;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

}

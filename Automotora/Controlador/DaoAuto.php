<?php

include_once 'conexion.php';
include_once '../Modelo/Auto.php';
class DaoAuto {
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Grabar ($auto){
        try {
            $sql="insert into auto values ('@pa','@du','@mo','@mar',@an)";
            $sql= str_replace("@pa", $auto->getPatente(), $sql);
            $sql= str_replace("@du", $auto->getDueno(), $sql);
            $sql= str_replace("@mo", $auto->getModelo(), $sql);
            $sql= str_replace("@mar", $auto->getMarca(), $sql);
            $sql= str_replace("@an", $auto->getAnio(), $sql);
            return $this->cone->SqlOperation($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

}

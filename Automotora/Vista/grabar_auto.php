<?php

include_once '../Controlador/DaoAuto.php';
include_once '../Modelo/Auto.php';

$patente=$_POST["txtPatente"];
$dueno=$_POST["txtDueno"];
$modelo=$_POST["txtModelo"];
$marca=$_POST["txtMarca"];
$anio=$_POST["txtAnio"];

$auto= new Auto();
$auto->setPatente($patente);
$auto->setDueno($dueno);
$auto->setModelo($modelo);
$auto->setMarca($marca);
$auto->setAnio($anio);

$dao=new DaoAuto();
$filas_afectadas=$dao->Grabar($auto);
if ($filas_afectadas>0){
    echo 'Grabo';
}else{
    echo 'no grabo';
}


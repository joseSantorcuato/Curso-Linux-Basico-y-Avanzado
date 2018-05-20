<?php
require_once("clases/alumnos.php");
$u=new usuarios();
if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
{
    die("error 404");
}
$datos=$u->getDatosId($_GET["id"]);
if(sizeof($datos)==0)
{
    die("error 404");
}
$u->eliminarDatos();
header("Location: index.php?m=3");
?>
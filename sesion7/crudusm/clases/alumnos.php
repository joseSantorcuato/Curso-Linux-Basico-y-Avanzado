<?php
//llamada al archivo conectar
require_once("conectar.php");
require_once("helpers.php");
//include("conectar.php");
class usuarios extends conectar//creamos la clase usuarios
//extiende o hereda de la clase conectar
{
    private $db;
    //crear nuestro constructor - metodo magico
    public function __construct(){
        $this->db=parent::conectar();//parent p' hacer referencia a la clase padre
        parent::setNames();   
    }
    public function getDatos(){
      //realizamos consulta a la BD
        $sql="select id,nombre,correo,telefono,fecha
            from
            usuarios;
            ";
      //pasar la consulta a la libreria query
       $datos= $this->db->query($sql);
       $arreglo=array();//declaramos arrglo
       //estructura repetitiva p' almacenar los datos
       //de la cosulta en el array
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }
       //retorna los datos
       return $arreglo;   
    }
    public function getDatosId($id){
      //realizamos consulta a la BD
         $sql="select id,nombre,correo,telefono,fecha
            from usuarios
            where id='".$id."'";
      //pasar la consulta a la libreria query
       $datos= $this->db->query($sql);
       $arreglo=array();//declaramos arrglo
       //estructura repetitiva p' almacenar los datos
       //de la cosulta en el array
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }
       //retorna los datos
       return $arreglo;   
    }

    public function insertarDatos(){
      //sentencia sql para insertar datos
      $sql="insert into usuarios
            values
            (null,'".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["telefono"]."','".$_POST["fecha"]."');";

        $this->db->query($sql);
    }
    public function actualizarDatos(){
      //sentencia sql para actualizar y/0 editar datos
      $sql="update usuarios
             set
            nombre='".$_POST["nombre"]."',
            correo='".$_POST["correo"]."',
            telefono='".$_POST["telefono"]."',
            fecha='".$_POST["fecha"]."'
            where
            id='".$_POST["id"]."'";
            
        $this->db->query($sql);
    }
    public function eliminarDatos()
    {
        $sql="delete from usuarios
            where id='".$_GET["id"]."'";
            
        $this->db->query($sql);
        
    }
  }
 ?>


<?php
class trabajador extends Conexion
{
public $conexion=null;
private $id;
private $nombre;
private $apellidos;
private $precio_hora;
   function __construct()


  {
    $this->conectar();
  }


  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])){
      $error="";
    }elseif($post["nombre"]==""){
      $error="No has introducido el nombre";
    }elseif($post["apellidos"]==""){
      $error="No has introducido el apellido";
    }elseif($post["precio_hora"]==""){
      $error="No has introducido la precio_hora";
    }else {
      $error=false;
      $this->nombre = $post['nombre'];
      $this->apellidos = $post['apellidos'];
      $this->precio_hora = $post['precio_hora'];
    }
    return $error;
    }
    public function insertarTrabajador()
      {
         $consulta="INSERT INTO trabajador (nombre, apellidos, precio_hora)
         VALUES ('$this->nombre', '$this->apellidos', $this->precio_hora)";
         $this->conexion->query($consulta);
       }
       public function ultimoRegistro()
       {
         $consulta="SELECT * FROM trabajador ORDER BY id DESC LIMIT 1";
         $resultado=$this->conexion->query($consulta);
         foreach($resultado as $value){
           $idTrabajador=$value["id"];
         }
         return $idTrabajador;
       }
       public function insertarProyectTrabaj($trabajador,$proyecto)
       {
         $consulta="INSERT INTO trabajador_proyecto (id_trabajador, id_proyecto, horas)
         VALUES ($trabajador, $proyecto,)";
         $this->conexion->query($consulta);
       }
   }
    ?>

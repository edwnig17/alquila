<?php 

header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/Cliente.php");


$clientes=new Cliente();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$clientes->get_cliente();
       echo json_encode($datos);
    break;


    case "insert":
        
        $datos=$clientes->insert_cliente($body["nombre"],$body["documento"],$body["edad"],$body["correo"],$body["direccion"]);
        echo json_encode("insertado correctamente");
  
      break;

  

}

    

?>
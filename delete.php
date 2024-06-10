


<?php include ("coneccion.php");
 

  if(isset($_GET['id'])){
    echo "Hola";
    $id = $_GET['id'];
   
    $query = "DELETE FROM tareas WHERE id =$id";
    $result =mysqli_query($coneccion,$query);
    if(!$result){

        die("query failed");
    }

   $_SESSION['mensaje']='tarea eliminada';
   $_SESSION['mensaje_type']='danger';

 
  
 
   header("location: index.php");
  }
  else {
    echo "Error: id no definido";
}



?>


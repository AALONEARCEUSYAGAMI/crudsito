

<?php include ("coneccion.php") ?>

<?php


if(isset($_POST["guardarimput"]))
{
 $title = $_POST['title'];
 $description = $_POST ['description'];

 
 $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$title', '$description')";



$result = mysqli_query($coneccion, $query);
 /* echo $title;
 echo $description; */
 if(!$result){

    die("Error en la consulta: " . mysqli_error($coneccion));

 }
 session_start();
 $_SESSION['mensaje']='Tarea guardada';
 $_SESSION['mensaje_type']= 'sussecion';
 header("Location: index.php");
}



?>
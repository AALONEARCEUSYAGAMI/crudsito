

<?php include ("coneccion.php");

$title = '';
$descripcion= '';

if(isset($_GET['id'])){
    echo "Hola";
    $id = $_GET['id'];
    $query = "SELECT * FROM tareas WHERE id =$id";

    $result = mysqli_query($coneccion, $query);

    if (mysqli_num_rows($result) == 1) 
{
    $row = mysqli_fetch_array($result);
    $title = $row ['titulo'];
    echo $title;
    $descripcion = $row ['descripcion'];

}
}
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title= $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
  
    $query = "UPDATE tareas set titulo = '$title', descripcion = '$descripcion' WHERE id=$id";
    mysqli_query($coneccion, $query);
    $_SESSION['message'] = ' la tarea a sido actualizada';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }
?>

<?php  

include ("header/header.php");
?>
<div class ="container p-4">

<div class="row">
<div calss= "col-m-4 mx-auto">
<div class="card card-body">
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">


<div class="form-group">

<input type="text" name = "titulo" value= "<?php echo $title; ?>" class="form-control" pleaceholder = "actualizar titulo ">

</div>

<div class="form-group">
<textarea name="descripcion"  rows="2" class="form-control" pleaceholder = "actualizar informacion"   ><?php echo $descripcion; ?></textarea>

</div>
<button class= "btn btn-success" name="update">Actualizar</button>

</form>


</div>
</div>

</div>
</div>

<?php  

 include ("header/footer.php");

?>
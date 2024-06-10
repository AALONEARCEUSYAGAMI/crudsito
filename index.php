<?php include("coneccion.php") ?>
<?php include("header/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

        <?php 
if(isset($_SESSION['mensaje']))
{?>

    <div class="alert alert-<?= $_SESSION['mensaje_type'];?> alert-dismissible fade show" role="alert">
   <?php $mensaje= $_SESSION["mensaje"];
        echo $mensaje;
         
?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
   

    <?php session_unset();}?>

            <div class="card card-body">
                <form action="save.php" method="post">
                    <div class="form-group">
                        <h2>Guarde su tarea aquí</h2>
                        <input type="text" name="title" class="form-control" placeholder="Escribe aquí" autofocus>
                        <br>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Escribe aquí"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" style="float: right;" name="guardarimput" value="Guardar">
                
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Contenido de la columna 8 -->

<table class= "table table-bordered">
<thead>

<tr>

<th>titulo</th>
<th>descripcion</th>
<th>fecha</th>
<th>acciones</th>
</tr>
</thead>
<tbody>
<?php   
    $query = "SELECT * FROM  tareas";
    $resultado_tareas = mysqli_query($coneccion, $query);
   
    while ($arreglo = mysqli_fetch_array($resultado_tareas)) { ?>
       <tr>
<td>   <?php echo $arreglo['titulo']?></td>
<td>   <?php echo $arreglo['descripcion']?></td>
<td>   <?php echo $arreglo['fecha']?></td>
<td>  <a href="edit.php?id=<?php echo $arreglo['id']?>" class="btn btn-secondary">editar</a> 
      <a href="delete.php?id=<?php echo $arreglo['id']?>" class="btn btn-danger">eliminar</a>
   
</td>
       </tr>
 <?php   }
?>
</tbody>
</table>


        </div>
    </div>
</div>

<?php include("header/footer.php") ?>

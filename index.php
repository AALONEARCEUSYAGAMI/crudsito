
    <?php include ("coneccion.php") ?>
    <?php include ("header/header.php") ?>

<div class ="container p-4">



<div class="row">

<div class= "col-md-4">

<div class="car car-body">

<form action="save.php" method="post">

<div class="form-group">

<input type="text" name="title" class="form-control" 
placeholder="escribe aqui" autofocus>
</div>


<div class="form-group">

<textarea name="description"  rows="2" class = "form-control" 
pleaceholder= "escribe aqui"></textarea>
</div>
<input type="submit" class="btn btn-success btn-block" name="guardarimput" value="guardar">
</form>

</div>

</div>
<div class= "col-md-8">


</div>

</div>




</div>
<?php include ("header/footer.php")?>

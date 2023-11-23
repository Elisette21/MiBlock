<?php include("../template/cabecera.php"); ?>
Libros
<div class="col-md-5">
    Agregar contenidos
    <form method="POST" enctype="multipart/form-data" >

    <div class = "form-group">
    <label for="txtID">ID</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Ingrese el Nombre">
    </div>

    <div class = "form-group">
    <label for="txtimg">Imagen:</label>
    <input type="text" class="form-control" name="txtimg" id="txtimg" placeholder="Subir Imagen">
    </div>

   <div class="btn-group" role="group" aria-label="">
    <button type="button" class="btn btn-success">Agregar</button>
    <button type="button" class="btn btn-warning">Modificar</button>
    <button type="button" class="btn btn-info">Cancelar</button>
   </div>
    
    </form>
    
    
</div>
<div class="col-md-7">
    Tabla de contenido
</div>

<?php include("../template/pie.php"); ?>
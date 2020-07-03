<? php
use/slim

?>

<div class = "form-group"> <etiqueta>Formulario</etiqueta> </div>
<div class = "form-group">
    <label for="matricula">Matricula: </label>
    <input type="text" name="matricula" id="matricula" class="form-control" required >
    </div> 
    <div class = "form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>
    <div class = "form-group">
    <label for="apellido_p">Apellido Paterno: </label>    
    <input type="text" name="apellido_p" id="apellido_p" class="form-control" required>   
    </div>
    <div class = "form-group">
    <label for="apellido_m">Apellido Materno: </label>    
    <input type="text" name="apellido_m" id="apellido_m" class="form-control" required>   
    </div>
    <div class = "form-group">
    <label for="edad">Edad: </label>   
    <input type="number" name="edad" id="edad" class="form-control" required>   
    </div>
    <div class = "form-group">
    <label for="fecha">Fecha de nacimiento: </label>   
    <input type="date" name="fecha" id="fecha" class="form-control" required>   
    </div>
    <div class = "radio">
    <label for=”sexo”>Sexo: </label>
    <etiqueta>
    <div class = "radio">
    <input type=”radio” id=”opcion1” name=”opcion1”  > 
     Masculino 
    </etiqueta>
    </div>
    <div class = "radio">
    <input type=”radio” id=”opcion2” name=”opcion2” >
     femenino 
    </etiqueta>
    </div>
    <div class = "form-group">
    <label for="estado">Estado civil: </label>    
    <input type="text" name="estado" id="estado" class="form-control" required>   
    </div>

    <button type = "button" class = "butto principal"> Guardar </button>
</form>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
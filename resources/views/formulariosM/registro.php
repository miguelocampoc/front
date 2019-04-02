
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="validar.js"></script>
<link rel = "stylesheet" type = "text/css" href = "fondo.css">
</head>
<body>
  <div class="container">
  <div class="alert alert-info" role="alert">
  <h1 class="h3 mb-3 font-weight-normal"  >Registrar cliente</h1>
</div>
    <form action="" method="POST">

        <div class="row">
           <div class="col-md-4">
            <label for="sel1">Primer nombre</label>
            <input type="text" placeholder="Primer nombre"  class="form-control"  name="nombre1" required>
           </div>
           <div class="col-md-4">
            <label for="sel1">Segundo nombre</label>
            <input type="text" placeholder="Segundo nombre"  class="form-control" name="nombre2" required>
           </div>
           <div class="col-md-4">
            <label for="sel1">Primer apellido</label>
            <input type="email" placeholder="Primer Apellido"   class="form-control"   name="identificacion" required>
           </div>
        </div>
               <br/>
        <div class="row">
         <div class="col-md-4">
          <label for="sel1">Segundo apellido</label>
          <input type="text" placeholder="Segundo Apellido"   class="form-control"  name="ciudad" required>
         </div>
         <div class="col-md-4">
          <label for="sel1">Sexo</label>
          <div class="radio">
           <label><input type="radio" name="optradio" checked>Maculino</label>
          </div>
          <div class="radio">
           <label><input type="radio" name="optradio">Femenino</label>
          </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
         <label for="sel1">Departamento</label>
         <select class="form-control" id="sel1">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         </select>
         </div>
         </div>
        </div>
            <br/>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
             <label for="sel1">Ciudad</label>
             <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
             </select>
            </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="sel1">Tipo de vivienda</label>
            <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
          </div>
         </div>
         <div class="col-md-4">
          <label for="sel1">Direccion</label>
          <input type="text" placeholder="Direccion"   class="form-control"  name="direccion" required>
         </div> 
        </div >
            <br/>

      <div class="row">
           <div class="col-md-4">
            <label for="sel1">Barrio</label>
            <input type="text" placeholder="Barrio"   class="form-control"  name="direccion" required>
           </div>
        <div class="col-md-4">
         <label for="sel1">Contactos</label>
         <input type="number" placeholder="celular"   class="form-control"  name="direccion" required>
         <input type="number" placeholder="telefono(opcional)"   class="form-control"  name="direccion" required>
         </div>
        <div class="col-md-4">
          <label for="sel1">email</label>
          <input type="email" placeholder="email"   class="form-control"  name="direccion" required>
        </div>
      </div>
               <br/>
               <br/>
               <br/>
           <input type="submit"  value="Registrar" class="btn btn-lg btn-primary btn-block"  >
    </form>
          <center><p  class="mt-5 mb-3 text-muted">&copy; 2019</p></center>
  </div >
</body>
</html>
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
<link rel = "stylesheet" type = "text/css" href = "signin.css">

</head>
<body>
  <div class="container">
  <div class="alert alert-info" role="alert">
  <h1 class="h3 mb-3 font-weight-normal"  >Inventario</h1>
</div>
    <form action="" method="POST">

        <div class="row">
           <div class="col-md-6">
            <label for="sel1">Referencia</label>
            <input type="text" placeholder="Referencia"  class="form-control"  name="referencia" required>
           </div>
           <div class="col-md-6">
            <label for="sel1">Fecha factura</label>
            <input type="date" placeholder="Fecha factura"  class="form-control" name="fecha_factura" required>
           </div>
           
        </div>
               <br/>
        <div class="row">
         <div class="col-md-6">
          <label for="sel1">Descripcion</label>
          <textarea class="form-control" rows="3"  placeholder="Descripcion" name="descripcion"></textarea>
         </div>
         <div class="col-md-6">
          <label for="sel1">Costo entrada</label>
          <input type="number" placeholder="costo entrada"   class="form-control"  name="costo_Entrada" required>

         </div>
         
        </div>
            <br/>
        <div class="row">
          <div class="col-md-6">
          <label for="sel1">Costo salida</label>
          <input type="number" placeholder="costo salida"   class="form-control"  name="costo_Salida" required>
          </div>

          <div class="col-md-6">
          <label for="sel1">Cantidad</label>
          <input type="number" placeholder="cantidad"   class="form-control"  name="cantidad" required>
          </div>
         </div>
         
            <br/>

      
               <br/>
               <br/>
               <br/>
           <input type="submit"  value="Registrar" class="btn btn-lg btn-primary btn-block"  >
    </form>
          <center><p  class="mt-5 mb-3 text-muted">&copy; 2019</p></center>
  </div >
</body>
</html>
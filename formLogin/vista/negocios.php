<?php
session_start();
if(isset($_SESSION["usuario"])){
		if($_SESSION["privilegio"] == 1){

		}else{
			header("Location: user.php");
		}
}else{
    header("Location: index.php");
}
?>
<?php include 'include/head.php';?>

<?php include 'include/menu.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-1.11.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
            body {
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: rgb(235, 235, 235);
            }

            .form-signin {
              max-width: 330px;
              padding: 15px;
              margin: 0 auto;
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
              margin-bottom: 10px;
            }
            .form-signin .checkbox {
              font-weight: normal;
            }
            .form-signin .form-control {
              position: relative;
              height: auto;
              -webkit-box-sizing: border-box;
                 -moz-box-sizing: border-box;
                      box-sizing: border-box;
              padding: 10px;
              font-size: 16px;
            }
            .form-signin .form-control:focus {
              z-index: 2;
            }

    </style>
</head>

<body>
  <div class="col-md-6 col-md-push-3" >
    <form  role="form" method="post" action="#" enctype="multipart/form-data">
      <h2 class="form-signin-heading"> Datos de Negocios </h2>
      <div class="form-group">
      <label for="example-text-input">Nombre Negocio</label>
      <input type="text" class="form-control" name="NombreNegocio" id="NombreNegocio" aria-describedby="emailHelp" placeholder="Nombre">
      <small id="nn" class="form-text text-muted">Nombre del Negocio</small>
    </div>

    <div class="form-group">
    <label for="exampleTextarea">Descripcion Negocio</label>
    <textarea class="form-control" name="DescripcionNegocio" id="DescripcionNegocio" rows="3"></textarea>
  </div>

  <div class="form-group">
  <label for="example-text-input">Direccion del Negocio</label>
  <input type="text" class="form-control" name="DireccionNegocio" id="DireccionNegocio" aria-describedby="emailHelp" placeholder="Nombre">
  <small id="dn" class="form-text text-muted">Direccion del Negocio</small>
</div>

<div class="form-group">
<label for="example-text-input">Forma de Contactar</label>
<input type="text" class="form-control" name="ContactoNegocio" id="ContactoNegocio" aria-describedby="emailHelp" placeholder="Nombre">
<small id="dn" class="form-text text-muted">Numero, Facebook, etc.</small>
</div>

<div class="form-group">
    <label for="exampleSelect1">categoria del Negocio</label>
    <select class="form-control" name="CategoriaNegocio" id="CategoriaNegocio">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="FotoNegocio">Foto del Negocio</label>
    <input type="file" class="form-control-file" name="FotoNegocio" id="FotoNegocio" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Foto del negocio sin espacios en nombre</small>
  </div>

  <!--<button type="submit" class="btn btn-primary">Guardar</button>-->
  <input  class="btn btn-danger" type="submit" name="submit" value="Guardar"/>
  </div>
  <?php
    		if(isset($_POST['submit'])){
    			require("validarnegocios.php");
    		}
    	?>
</form>
</body>

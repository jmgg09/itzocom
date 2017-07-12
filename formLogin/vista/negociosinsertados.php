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
        <div id="contenido" >
            
            
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="form-signin-heading">Lista de Negocios</h2>
                </div>
                <div class="table-responsive">
                <?php
                require ("connect_db.php");
                           
                            $sql = ("SELECT * FROM negocios ORDER BY NombreNegocio ASC");
                            $query=mysqli_query($mysqli,$sql);
                            ?>
                    <table class='table table-hover';>
                        <thead class='warning' >
                        <th>Nombre Negocio</th>
                        <th>Descripcion Negocio</th>
                        <th>Direccion Negocio</th>
                        <th>Contacto Negocio</th>
                        <th>Categoria Negocio</th>
                        <th>Foto Negocio</th>
                        <th>Validar</th>
                        <th>Eliminar</th>            
                        </thead>
                        <tbody>
                        
                            <?php
                            
                            while($row=mysqli_fetch_array($query)){
                           
                                echo "<tr class='success'>";
                               // echo '<td>' . $con . '</td>';
                                echo "<td>  $row[1]  </td>";
                                echo "<td>  $row[2]  </td>";
                                echo "<td>  $row[3]  </td>";
                                echo "<td>  $row[4]  </td>";
                                echo "<td>  $row[5]  </td>";
                                 echo "<td> <img src=$row[6]  width='90' heigth='90'> </td>";
                                echo '<td><button class="btn btn-primary" onclick="editar(' . $row[0] . ')">Editar</button></td>';
                                echo '<td><button class="btn btn-primary" onclick="eliminar(' . $row[0] . ', this)">Eliminar</button></td>';
                                echo '</tr>';
                                
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
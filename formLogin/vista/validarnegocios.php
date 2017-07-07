<?php
$NombreNgocio=$_POST['NombreNegocio'];
$DescripcionNegocio=$_POST['DescripcionNegocio'];
$DireccionNegocio=$_POST['DireccionNegocio'];
$ContactoNegocio=$_POST['ContactoNegocio'];
$CategoriaNegocio=$_POST['CategoriaNegocio'];
$foto=$_FILES["FotoNegocio"]['name'];
$ruta=$_FILES['FotoNegocio']['tmp_name'];
$destino="fotos/".$foto;
copy($ruta,$destino);


require("connect_db.php");

$check=mysqli_query($mysqli,"SELECT * FROM negocios WHERE NombreNegocio='$NombreNgocio'");
$check_nombre=mysqli_num_rows($check);
if($check_nombre>0){
	echo ' <script language="javascript">alert("Negocio Existente");</script> ';
}else{
	mysqli_query($mysqli,"INSERT INTO negocios VALUES('','$NombreNgocio','$DescripcionNegocio','$DireccionNegocio','$ContactoNegocio','$CategoriaNegocio','$destino')");
	echo ' <script language="javascript">alert("Negocio registrado con exito");</script> ';
	///	echo "<script>location.href='negocios.php'</script>";
}
?>

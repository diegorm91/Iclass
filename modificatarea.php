<?
  session_start();
  if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	 $_REQUEST["idclase"]="";

if ($_REQUEST["idtarea"]!="")
	   $_SESSION["idtarea"]=$_REQUEST["idtarea"];
	 $_REQUEST["idtarea"]="";

//echo $_SESSION["idtarea"];
$idtarea=$_SESSION["idtarea"];;
//echo $idtarea;
	 
	 
  $titulo=$_POST["titulo"];
  $mensaje=$_POST["descripcion"];
  
  $red="TAREA ACTUALIZADA CORRECTAMENTE";
$id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="Update tareas set titulo='$titulo',mensaje='$mensaje' where idtarea=".$idtarea.";";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL ");
  echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"TAREA ACTUALIZADA CORRECTAMENTE");
  if($red==0)
  {print"<meta http-equiv='Refresh' content=\"0; url=temas.php\">"; }
  ?>
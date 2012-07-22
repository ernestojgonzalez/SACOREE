<?php require_once('Connections/conexion1.php'); ?>
<?php
mysql_select_db($database_conexion1, $conexion1);
$query_modipieza = "SELECT * FROM equipo";
$modipieza = mysql_query($query_modipieza, $conexion1) or die(mysql_error());
$row_modipieza = mysql_fetch_assoc($modipieza);
$totalRows_modipieza = mysql_num_rows($modipieza);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
    <title>Modificar</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="art-page-background-middle-texture">
<div id="art-main">
    <div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-png"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-headerobject"></div>
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.html">...SACOREE...</a></h1>
                         <h2 class="art-logo-text">Nuestro deber es servir.</h2>
        </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<div class="art-nav-outer">
<div class="art-nav-wrapper">

<?php include "menu.php" ?>


</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Inicio
                                        </h2>
                    <div class="cleared"></div>
                  </div>
                                <div class="art-postcontent">
<!-- empieza el formulario    -->
<p><br /></p>
   <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
    
   $consulta = "SELECT * from piezas where codigoPieza = '$criterio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El codigo $criterio no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
				   $id_parte_pieza=$row[0];
                   $nombre_equipo=$row[1];
                   $pieza=$row[2];
                   $codigoPieza=$row[3];
                   $marca=$row[4];
                   $modelo=$row[5];
				   $cantidadPieza=$row[6];
				   $descripcion=$row[7];
				   $composicion=$row[8];
				  
                   ?>
    
      <div align="center">
	  <strong>MODIFICAR PARTE DEL EQUIPO</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>Nombre y codigo del equipo</strong></td><td><?php echo "$row[1]" ?></td></tr>
        <tr>
          <td><strong>Nombre de la Pieza </strong><strong>del equipo</strong></td>
          <td><?php echo " $row[2]" ?></td></tr>
        <tr><td><strong>codigo de la pieza    </strong><strong>del equipo</strong></td><td><?php echo "  $row[3]" ?></td></tr>
        <tr><td><strong>Marca</strong></td><td><?php echo "$row[4]" ?></td></tr>
		<tr><td><strong>Modelo</strong></td><td><?php echo "$row[5]" ?></td></tr>
	    <tr><td><strong>Cantidad</strong></td><td><?php echo "$row[6]" ?></td></tr>
        <tr><td><strong>Descripcion</strong></td><td><?php echo "  $row[7]" ?></td></tr>
		<tr><td><strong>Composicion</strong></td><td><?php echo "  $row[8]" ?></td></tr>
         </table>        
        <?php
                   }
                   ?>

<form method="post" name="form1" id="form1" enctype="multipart/form-data" action="modificar_pieza1.php" onSubmit="return validar()">
<br>   

<div align="center">
 <table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Equipo</td>
			<td><center><select id="nombre_equipo" name="nombre_equipo"value="<?php echo $nombre_equipo ?>">
			 <option selected="nombre_equipo"><?php echo $nombre_equipo ?></option>
			  <?php
do {  
?>
			  <option value="<?php echo $row_modipieza['nombre'],' ',$row_modipieza['codigo']?>"<?php if (!(strcmp($row_modipieza['nombre'], $row_modipieza['nombre']))) {echo $nombre_equipo;} ?>><?php echo $row_modipieza['nombre'],' ',$row_modipieza['codigo']?></option>
			  <?php
} while ($row_modipieza = mysql_fetch_assoc($modipieza));
  $rows = mysql_num_rows($modipieza);
  if($rows > 0) {
      mysql_data_seek($modipieza, 0);
	  $row_modipieza = mysql_fetch_assoc($modipieza);
  }
?>
			</select>
			
			
			</td>
			<td><center>Pieza</td>
			<td><center><input type="text" id="pieza" name="pieza" value="<?php echo $pieza ?>" /></td>
			<td><center>Codigo</td>
			<td><center><input type="text" id="codigoPieza" name="codigoPieza" value="<?php echo $codigoPieza ?>"/></td>
	</tr>
	<tr>	
			<td><center>Marca</td>
			<td><center><input type="text" id="marca" name="marca" value="<?php echo $marca ?>"/></td>
			<td><center>Modelo</td>
			<td><center><input type="text" id="modelo" name="modelo" value="<?php echo $modelo ?>" /></td>
			<td><center>Cantidad</td>
			<td><center><input type="text" id="cantidadPieza" name="cantidadPieza" value="<?php echo $cantidadPieza ?>"/></td>
	</tr>
		<tr>	
			<td><center>Descripcion</td>
			<td colspan="2"><center>
			 <textarea rows="2" cols="20" name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
			  			  </td>
			<td><center></td>
			<td><center>Composicion</td>
			<td><center><textarea rows="2" cols="20" name="composicion" id="composicion"><?php echo $composicion ?></textarea>
	</tr>
	</table>
	
	
				
				
				<br />
				
	 <input type="hidden" name="id_parte_pieza" id="id_parte_pieza" value="<?php echo $id_parte_pieza ?>">
    <input name="submit" type="submit" value="Guardar">
</p>
  </div>
 </form>
      </center>
      </table>

      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>

<!-- empieza el formulario    -->

                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                
                  </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"></p>
</div>
    <div class="cleared"></div>
</div>

</body>
</html>
<?php
mysql_free_result($modipieza);
?>
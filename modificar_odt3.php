<?php require_once('Connections/conexion1.php'); ?>
<?php
mysql_select_db($database_conexion1, $conexion1);
$query_personal = "SELECT * FROM personal ORDER BY personal.cedula";
$personal = mysql_query($query_personal, $conexion1) or die(mysql_error());
$row_personal = mysql_fetch_assoc($personal);
$totalRows_personal = mysql_num_rows($personal);

mysql_select_db($database_conexion1, $conexion1);
$query_equipo2 = "SELECT * FROM equipo";
$equipo2 = mysql_query($query_equipo2, $conexion1) or die(mysql_error());
$row_equipo2 = mysql_fetch_assoc($equipo2);
$totalRows_equipo2 = mysql_num_rows($equipo2);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Inicio</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<link type="text/css" href="css/custom-theme/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
	
	
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });

				// Tabs
				$('#tabs').tabs();

				// Dialog
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() {
							$(this).dialog("close");
						},
						"Cancel": function() {
							$(this).dialog("close");
						}
					}
				});

				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#fecha_ini').datepicker({
					inline: true
				});
					// Datepicker
				$('#fecha_fin').datepicker({
					inline: true
				});
				
				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});

				// Progressbar
				$("#progressbar").progressbar({
					value: 20
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
		</script>
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>
		
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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Modificar
                                        </h2>
                    <div class="cleared"></div>
                                    </div>
                                <div class="art-postcontent">
<!-- empieza el formulario    -->
<p><br /></p>
     <?php
    include "coneccionbasedatosmysql.inc";
    $id_odt = $_REQUEST['id_odt']; 
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
 
   $consulta = "SELECT * from orden where id_odt = '$id_odt';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El empleado $id_odt no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $id_odt=$row[0];
                    $trabajo=$row[1];
                   $fecha_ini=$row[2];
                   $fecha_fin=$row[3];
                   $empleado=$row[4];
                   $equipo=$row[5];
           
                   ?>
     
      <div align="center"> 
		  <strong><h3><center>MODIFICAR ORDEN DE TRABAJO</strong></center></h3>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
               <tr><td><strong>Datos del empleado:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
                      <tr><td><strong>Datos del equipo:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
                      <tr><td><strong>Trabajo Asignado:</strong></td><td><?php echo "$row[1]" ?></td></tr>
                    
                      <tr><td><strong>Fecha inicial:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
					  <tr><td><strong>Fecha Final:</strong></td><td><?php echo "  $row[3]" ?></td></tr><br /> </table>        <br /> 
        <?php
                   }
                   ?>
        
 <form method="post" enctype="multipart/form-data" action="modificar_odt4.php" id="from1" name="from1">
	<center>
	
	
	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Empleado</td>
			<td><select id="empleado" name="empleado">
			<option selected="empleado"><?php echo $empleado?></option>
			  <?php
do {  
?>
			  <option value="<?php echo $row_personal['nombre'],' ',$row_personal['apellido'],' ',$row_personal['cedula']?>"<?php if (!(strcmp($row_personal['cedula'], $row_personal['cedula']))) {echo  $empleado;} ?>><?php echo $row_personal['nombre'],' ',$row_personal['apellido'],' ',$row_personal['cedula']?></option>
			  <?php
} while ($row_personal = mysql_fetch_assoc($personal));
  $rows = mysql_num_rows($personal);
  if($rows > 0) {
      mysql_data_seek($personal, 0);
	  $row_personal = mysql_fetch_assoc($personal);
  }
?>
			</select></td>
			<td><center>Equipo</td>
			<td><center><select id="equipo" name="equipo">
			<option selected="equipo"><?php echo $equipo?></option>
			  <?php
do {  
?>
			  <option value="<?php echo  $row_equipo2['nombre'],' ',$row_equipo2['codigo']?>"<?php if (!(strcmp($row_equipo2['codigo'], $row_equipo2['codigo']))) {echo $equipo;} ?>><?php echo $row_equipo2['nombre'],' ',$row_equipo2['codigo']?></option>
			  <?php
} while ($row_equipo2 = mysql_fetch_assoc($equipo2));
  $rows = mysql_num_rows($equipo2);
  if($rows > 0) {
      mysql_data_seek($equipo2, 0);
	  $row_equipo2 = mysql_fetch_assoc($equipo2);
  }
?>
			</select>
			
			 	</td>
			
			
	</tr>
	<tr>	
			<td><center>Fecha inicio</td>
			<td class="demo"><center><input type="text" id="fecha_ini" name="fecha_ini" value="<?php echo $fecha_ini?>"/></td>
			<td>Fecha Fin</td>
			<td class="demo"><center><input type="text" id="fecha_fin" name="fecha_fin" value="<?php echo $fecha_fin ?>"/></td>
	
			
	</tr>
	<tr>
	<td><center>Trabajo asignado al empleado</td>
	<td colspan="4"><center><textarea rows="2" cols="67" name="trabajo" id="trabajo"><?php echo $trabajo ?></textarea></td>

	</tr>
	</table>
	 <input type="hidden" name="id_odt" id="id_odt" value="<?php echo $id_odt ?>">
      <input name="submit" type="submit" value="Continuar">
</div></td></tr>
    <div align="center">
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
</html><?php
mysql_free_result($personal);

mysql_free_result($equipo2);
?>
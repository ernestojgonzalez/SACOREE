<?php require_once('Connections/conexion1.php'); ?>
<?php
mysql_select_db($database_conexion1, $conexion1);
$query_empleado = "SELECT * FROM personal";
$empleado = mysql_query($query_empleado, $conexion1) or die(mysql_error());
$row_empleado = mysql_fetch_assoc($empleado);
$totalRows_empleado = mysql_num_rows($empleado);

mysql_select_db($database_conexion1, $conexion1);
$query_equipo = "SELECT * FROM equipo";
$equipo = mysql_query($query_equipo, $conexion1) or die(mysql_error());
$row_equipo = mysql_fetch_assoc($equipo);
$totalRows_equipo = mysql_num_rows($equipo);
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
				changeMonth: true,
				changeYear: true,
				inline: true,	
				changedateformat: true,
				dateformat: 'dd-mm-yy',
				//showOn: 'button',
				//buttonImage: '/img.png',
				//buttonImageOnly: true,
				
				firstDay: 1
				});
				
					// Datepicker
				
				
				$('#fecha_fin').datepicker({
				changeMonth: true,
				changeYear: true,
				inline: true,	
				changedateformat: true,
				dateformat: 'dd-mm-yy',
				//showOn: 'button',
				//buttonImage: '/img.png',
				//buttonImageOnly: true,
				
				firstDay: 1
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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Insertar
                                        </h2>
                    <div class="cleared"></div>
                    </div>
                                <div class="art-postcontent">
<!-- Accordion -->
	
		
			
		<div id="accordion">
			<div>
				<h3><a href="#">OPCIONES</a></h3>
					<div><br /> <br /> <br><center>Al seleccionar el una opcion podra insertar distinta informacion</div>
			</div>
			<div>
				<h3><a href="#">INSERTA EMPLEADO</a></h3>
				<div>
				<br /><br /><form method="post" enctype="multipart/form-data" action="insertaPersonal.php" id="from1" name="from1">
	<center>
	
	
	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Nombre</td>
			<td><center><input type="text" id="mombre" name="nombre" /></td>
			<td><center>Apellido</td>
			<td><center><input type="text" id="apellido" name="apellido" /></td>
			<td><center>Cedula</td>
			<td><center><input type="text" id="cedula" name="cedula" /></td>
			
			
	</tr>
	<tr>	
			<td><center>Horario</td>
			<td><center><input type="text" id="horario" name="horario" /></td>
			<td><center>Cargo</td>
			<td><center><input type="text" id="cargo" name="cargo" /></td>
			<td><center>foto</td>
			<td><center><input type="hidden" id="titulo" name="titulo" >     <input type="file" size="20" name="archivo" id="archivo"></td>
			
	</tr>
	</table>
	
	
				
				
				<br />
				<input name="submit" type="submit" value="Guardar">
				
				</form>
				</div>
			</div>
			<div>
				<h3><a href="#">INSERTA EQUIPO</a></h3>
				<div><br /><br /><form method="post" enctype="multipart/form-data" action="insertaEquipo.php" id="from2" name="from2">
	<center>
	
	
	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Nombre</td>
			<td><center><input type="text" id="mombre" name="nombre" /></td>
			<td><center>Codigo</td>
			<td><center><input type="text" id="codigo" name="codigo" /></td>
			<td><center>Marca</td>
			<td><center><input type="text" id="marca" name="marca" /></td>
			
			
	</tr>
	<tr>	
			<td><center>Modelo</td>
			<td><center><input type="text" id="modelo" name="modelo" /></td>
			<td><center>Cantidad</td>
			<td><center><input type="text" id="cantidad" name="cantidad" /></td>
			<td><center>foto</td>
			<td><center><input type="hidden" id="num_reg" name="num_reg" /><input type="hidden" id="titulo" name="titulo" /><input type="file" id="archivo" name="archivo" /></td>
			
	</tr>
	</table>
	
	
				
				
				<br />
				<input name="submit" type="submit" value="Guardar">
				
				</form></div>
			</div>
			<div>
				<h3><a href="#">INSERTA PIEZAS</a></h3>
				<div><form method="post"enctype="multipart/form-data"  action="insertaPieza.php" id="from3" name="from3">
	<center>
	
	
	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Equipo</td>
			<td><center><select name="nombre_equipo" id="nombre_equipo">
			  <option selected="selected">Seleccionar</option>
			  <?php
do {  
?>
			  <option value="<?php echo $row_equipo['nombre'],'  ', $row_equipo['codigo']?>"<?php if (!(strcmp($row_equipo['codigo'], $row_equipo['codigo'])))  ?>><?php echo $row_equipo['nombre'],'  ',$row_equipo['codigo']?></option>
			  <?php
} while ($row_equipo = mysql_fetch_assoc($equipo));
  $rows = mysql_num_rows($equipo);
  if($rows > 0) {
      mysql_data_seek($equipo, 0);
	  $row_equipo = mysql_fetch_assoc($equipo);
  }
?>
			</select></td>
			<td><center>Pieza</td>
			<td><center><input type="text" id="pieza" name="pieza" /></td>
			<td><center>Codigo</td>
			<td><center><input type="text" id="codigoPieza" name="codigoPieza" /></td>
	</tr>
	<tr>	
			<td><center>Marca</td>
			<td><center><input type="text" id="marca" name="marca" /></td>
			<td><center>Modelo</td>
			<td><center><input type="text" id="modelo" name="modelo" /></td>
			<td><center>Cantidad</td>
			<td><center><input type="text" id="cantidadPieza" name="cantidadPieza" /></td>
	</tr>
		<tr>	
			<td><center>Descripcion</td>
			<td colspan="2"><center>
			  <textarea name="descripcion" cols="20" id="descripcion"></textarea>
			  </td>
			<td><center></td>
			<td><center>Composicion</td>
			<td><center><textarea name="composicion" id="composicion" cols="20"></textarea>
	</tr>
	</table>
	
	
				
				
				<br />
				<input type="hidden" id="id_parte_pieza" name="id_parte_pieza">
				<input name="submit" type="submit" value="Guardar">
				
				</form></div>
			</div>
			<div>
				<h3><a href="#">CREAR ODT</a></h3>
				<div><form method="post" enctype="multipart/form-data"  action="insertaOrden.php" id="from4" name="from4">
	<center>
	

	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Empleado</td>
			<td><center><select name="empleado">
			 <option selected="selected">Seleccionar</option>
			  <?php
do {  
?>
			  <option value="<?php echo $row_empleado['nombre'],' ',$row_empleado['apellido'],' ',$row_empleado['cedula']?>"<?php if (!(strcmp($row_empleado['cedula'], $row_empleado['cedula'])))  ?>><?php echo $row_empleado['nombre'] ,' ',$row_empleado['apellido'],' ',$row_empleado['cedula']?></option>
			  <?php
} while ($row_empleado = mysql_fetch_assoc($empleado));
  $rows = mysql_num_rows($empleado);
  if($rows > 0) {
      mysql_data_seek($empleado, 0);
	  $row_empleado = mysql_fetch_assoc($empleado);
  }
?>
			</select>
			<td><center>Equipo</td>
			<td><center><select name="equipo">
			<option selected="selected">Seleccionar</option>
			  <?php
do {  
?>
			  <option value="<?php echo $row_equipo['nombre'],' ',$row_equipo['codigo']?>"<?php if (!(strcmp($row_equipo['nombre'], $row_equipo['nombre'])))  ?>><?php echo $row_equipo['nombre'],' ',$row_equipo['codigo']?></option>
			  <?php
} while ($row_equipo = mysql_fetch_assoc($equipo));
  $rows = mysql_num_rows($equipo);
  if($rows > 0) {
      mysql_data_seek($equipo, 0);
	  $row_equipo = mysql_fetch_assoc($equipo);
  }
?>
			</select></td>
	</tr>
	<tr>	
			<td><center>Fecha inicio</td>
			<td class="demo"><center><input id="fecha_ini" type="date" name="fecha_ini" /></td>

		
		
			<td><center>Fecha Fin</td>
			<td class="demo"><center><input id="fecha_fin" type="date" name="fecha_fin" /> <?php dateformat: 'dd-mm-yy'?></td>
	</tr>
		<tr>	
			<td><center>Trabajo asignado al empleado</td>
			<td colspan="4"><center>
			  <textarea name="trabajo" cols="50" id="trabajo"></textarea></td>	
	</tr>
	</table>
	
	
				
				
				<br />
				<input type="hidden" id="id_odt" name="id_odt">
				<input name="submit" type="submit" value="Guardar">
				
				</form></div>
			</div>
		</div>
		


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
mysql_free_result($empleado);

mysql_free_result($equipo);
?>

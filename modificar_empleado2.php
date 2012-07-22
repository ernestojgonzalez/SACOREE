<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Modificar
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
  
 
   $consulta = "SELECT * from personal where cedula = '$criterio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El empleado $criterio no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $cedula=$row[0];
                   $nombre=$row[1];
                   $apellido=$row[2];
				   $cargo=$row[3];
				   $horario=$row[4];
                   $titulo=$row[5];
             

				   $link2=$row[5];
                   ?>
     
      <div align="center"> 
	  <strong><h3><center>MODIFICAR EMPLEADO</strong></center></h3>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>Nombre del empleado:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr>
          <td><strong>Apellido </strong><strong>del empleado:</strong></td>
          <td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>Cédula    </strong><strong>del empleado:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr><td><strong>Horario de Trabajo:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>Cargo:</strong></td><td><?php echo "  $row[3]" ?></td></tr>			  
        <tr><td><strong>Foto del Empleado:</strong></td><td><?php echo "<a href='$link2'>$row[5]</a>" ?></td></tr><br /> </table>        <br />
        <?php
                   }
                   ?>
        
 <form method="post" enctype="multipart/form-data" action="modificar_empleado.php" id="from1" name="from1">
	<center>
	
	
	<table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Nombre</td>
			<td><center><input type="text" id="mombre" name="nombre" value="<?php echo $nombre?>"/></td>
			<td><center>Apellido</td>
			<td><center><input type="text" id="apellido" name="apellido" value="<?php echo $apellido?>"/></td>
			<td><center>Cedula</td>
			<td><center><input type="text" id="cedula" name="cedula" value="<?php echo $cedula?>"/></td>
			
			
	</tr>
	<tr>	
			<td><center>Horario</td>
			<td><center><input type="text" id="horario" name="horario" value="<?php echo $horario?>"/></td>
			<td><center></td>
			<td><center></td>
			<td><center>Cargo</td>
			<td><center><input type="text" id="cargo" name="cargo" value="<?php echo $cargo?>"/></td>
	
			
	</tr>
	</table>
      <p>&nbsp;
        <strong>FOTO DEL EQUIPO</strong>
<br>
        <strong><a href="modificar_foto_empleado1.php?cedula=<?php echo $cedula?>">Si desea Modificar la Foto pulse aqui</a></strong>

        <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>"> 
           
</div>
<tr><td colspan="2"><div align="center"><strong><br>

Presione el botón continuar para guardar los cambios</strong></div></td></tr>
    <div align="center">
    </div>
<tr><td colspan="2"><div align="center">
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
</html>
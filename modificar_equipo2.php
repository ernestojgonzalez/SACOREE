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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Inicio
                                        </h2>
                    <div class="cleared"></div>
                                    </div>
                                <div class="art-postcontent">
<!-- empieza el formulario    -->
<p><br /></p>
<div align="center">

    <p>&nbsp;      </p>
    <p>
      <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()

   $consulta = "SELECT * from equipo where codigo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>El equipo $criterio <br> no existe en nuestra base de datos.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $codigo=$row[0];
                   $nombre=$row[1];
                   $modelo=$row[2];
                   $marca=$row[3];
                   $cantidad=$row[4];
                   $titulo=$row[6];
				   $num_reg=$row[7];           
  
				   $link2=$row[5];
                   ?>
      <strong>MODIFICAR EQUIPO</strong>    </p>
    <table width="400" border="8" bordercolor="#CCCCCC">
                      <tr><td><strong>Nombre del equipo:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
                      <tr><td><strong>Código del equipo:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
                      <tr><td><strong>Modelo:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
                      <tr><td><strong>Marca:</strong></td><td><?php echo "$row[3]" ?></td></tr>
  					  <tr><td><strong>Cantidad:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
                 		  
                      <tr><td><strong>Foto del Equipo:</strong></td><td><?php echo "<a href='$link2'>$row[5]</a>" ?></td></tr> <br /><br />
					  
                   <?php
                   }
                   ?>

<form action="modificar_equipo.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >
 <br>
<div align="center">
   
  <br /><br />
    <table width="700" align="center" border="1" bordercolor="#FFCC99" bgcolor="#FFCCFF">
	<tr>
			<td><center>Nombre</td>
			<td><center><input type="text" id="mombre" name="nombre" value="<?php echo $nombre?>"/></td>
			<td><center>Codigo</td>
			<td><center><input type="text" id="codigo" name="codigo" value="<?php echo $codigo?>"/></td>
			<td><center>Marca</td>
			<td><center><input type="text" id="marca" name="marca" value="<?php echo $marca?>"/></td>
			
			
	</tr>
	<tr>	
			<td><center>Modelo</td>
			<td><center><input type="text" id="modelo" name="modelo" value="<?php echo $modelo?>" /></td>
			<td><center></td>
			<td><center></td>
			<td><center>Cantidad</td>
			<td><center><input type="text" id="cantidad" name="cantidad" value="<?php echo $cantidad?>"/></td>
			
	</tr>
	</table>

<br>
<strong>FOTO DEL EQUIPO</strong>
<br>

<strong><a href="modificar_foto_equipo.php?num_reg=<?php echo $num_reg?>">Si desea Modificar la Foto pulse aqui</a></strong>


  
 <input type="hidden" name="num_reg" id="num_reg" value="<?php echo $num_reg ?>"> 

<tr><td colspan="2"><strong><br><br>Presione el botón continuar para guardar los cambios</strong></td></tr>
<br>

<tr><td colspan="2"><center><br><input name="submit" type="submit" value="Continuar"></center></td></tr>

</form>
</center>
</table>

    <p>
      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>
      </p>
    <p>&nbsp;
        </p>
</div>
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
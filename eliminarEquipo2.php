<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ELIMINAR</title>
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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Eliminar
                                        </h2>
                    <div class="cleared"></div>
                                    </div>
                                <div class="art-postcontent">
<!-- empieza el formulario    -->
<p><br /></p>
<p><br /></p>


<?php

	include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()


	if(!isset($_GET['pag']))
//paginacion
	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=10000000;
	$desde=($hasta*$pag)-$hasta;
// consulta a la tabla informe_personal	
	$consulta="SELECT * FROM equipo where match (nombre,codigo) against ('$criterio*' IN BOOLEAN MODE)";
	$resultado=mysql_query($consulta,$enlace);


?>

<center>
<CAPTION><strong><h3><center>CONSULTA</h3></strong></CAPTION>
<p>&nbsp;</p>
<table width="600"  border="1" class="tabla1"/>

   <TR bgcolor="#E4E4E7">

	<TH>Equipo</TH>
	<TH>Modelo</TH>
	<TH>Marca</TH>
    <TH>Cantidad</TH>
    <TH>Foto</TH>
	<TH>Eliminar</TH>
  </tr>
	<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {
       $link2 =$row[5];

       	echo "<td><center>Codigo: $row[0]<br>Nombre: $row[1]</td>";
		echo "<td><center>$row[2]</td>";
		echo "<td><center>$row[3]</td>";
       	echo "<td><center>$row[4]</td>";
		echo "<td><center><a target=_blank href='$link2'><img src='$row[5]' width='120'height='100'></a></td>";
		echo "<td><CENTER><a href=eliminarEquipo3.php?codigo=$row[0]>ELIMINAR</a></td>";
	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>
  </table>
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
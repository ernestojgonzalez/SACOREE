<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
                    <img src="./images/postheadericon.png" width="30" height="30" alt="" />Modificar
                                        </h2>
                    <div class="cleared"></div>
                                    </div>
                                <div class="art-postcontent">
<!-- empieza el formulario    -->
<p><br /></p>
<?php
// declaracion de variables

$id_odt=$_POST['id_odt']; 
$trabajo=$_POST['trabajo'];
$fecha_ini=$_POST['fecha_ini'];
$fecha_fin=$_POST['fecha_fin'];
$empleado=$_POST['empleado'];
$equipo=$_POST['equipo'];
$nro_fil = 0;


include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();


//tomo el valor de un elemento de tipo texto del formulario

//datos del arhivo

//compruebo si las características del archivo son las que deseo

 //COLOCA CONTENIDO EN MAYUSCULA

/*
$nombre_equipo=strtoupper($nombre_equipo);
$codigo_equipo=strtoupper($codigo_equipo);
$modelo=strtoupper($modelo);

$marca=strtoupper($marca);
$descripcion=strtoupper($descripcion);
$estado=strtoupper($estado);*/
           
			$Insertar= "UPDATE orden SET  id_odt='$id_odt',trabajo='$trabajo',fecha_ini='$fecha_ini',fecha_fin='$fecha_fin',empleado='$empleado',equipo='$equipo' WHERE id_odt = '$id_odt' ";
			
		 
			 
             $resultadoins=basedatos($Insertar);
             echo "<BR><strong><center>Los Datos fueron modificados exitosamente</center></strong><BR>";

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
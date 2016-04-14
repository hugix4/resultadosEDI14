<?php
require_once("conexionh.php");
$conexion=new conexion();
$conexion->conectar();
?>
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	 <script>
	  $(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
				})

			})
	 </script>
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	</head>	
	<body>
	
		<style>
			.container{
				width: 100%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
		</style> 
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Resultados del Examen Diagnóstico Intermedio 2014</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Resultados</b></li>
	</ul>

	<div id="tab-1" class="tab-content current">		
	
	<?php
	if(empty($_POST[Plantel]) && empty($_POST[Grupo])){//Si no envió plantel ni grupo se deduce que es un alumno y se busca en la BD su grupo a partir del número de cuenta		
		if(isset($_GET[c])){
			$sql0 = "select Grupo from Intermedio2014 where Cuenta='$_GET[c]'";
		}
		else{
		$sql0 = "select Grupo from Intermedio2014 where Cuenta='$_POST[Cuenta]'";
		}
		$sql0=$conexion->consulta($sql0);
		if(mysql_num_rows($sql0)>0){//Verificación de consulta nula
			while($row0=mysql_fetch_array($sql0)){
				$Grupo=$row0["Grupo"];
				$_POST[Grupo]=$row0["Grupo"];
			}
		$alfa=substr($_POST[Grupo],0,1);//Obtiene el primer digito del grupon para poder colocarlo en el nivel correspondeinte	
		
	//**********************************************Sección Primer Semestre Alumnos******************************************************************************************************
			
			
				echo"	</br><p class='eval' style='color: #fff;'><b>Alumno:</b><br/>La siguiente tabla de resultados muestra si el manejo de cada tema o habilidad permite al alumno avanzar sin problemas en su aprendizaje del ingl&eacute;s; &quot;SI&quot; significa que el manejo del tema o habilidad es suficiente, &quot;NO&quot; indica que es necesario que el alumno trabaje y mejore dicho tema o habilidad. Para ello, el alumno debe hacer click sobre cada palabra &quot;NO&quot; y esto lo llevará a los materiales que le brindarán apoyo o reforzamiento temático.</br></br>

					La &uacute;ltima columna indica si el desempe&ntilde;o de cada alumno fue el esperado para el nivel correspondiente a esta etapa del aprendizaje, de acuerdo con los programas de las asignaturas y los est&aacute;ndares del Marco Com&uacute;n Europeo de Referencia para las Lenguas.</br></br>

					Alumnos con resultado final <b>&quot;NO SATISFACTORIO&quot;</b>: son aquellos cuyos conocimientos esperados para los cursos de Ingl&eacute;s no se encuentran firmemente asimilados. Adem&aacute;s, sus habilidades de comprensi&oacute;n auditiva y de lectura tambi&eacute;n se encuentran por debajo de lo esperado, por lo cual es aconsejable realizar actividades de apoyo que sus profesores de inglés les asignen.</br></br>
					
					Los resultados que aparecen como NP significan que el alumno no present&oacute; el examen en cuesti&oacute;n. En estos casos se recomienda asegurarse presentar dicho exámen en el próximo ciclo para mantener su expediente en orden.</br>
					</p>
				";
					
				echo"<style type='text/css'>
				a:hover{color:#cb9d01;}
			  p {
				font-family:Century Gothic, sans-serif;
				font-size:11%;
				color: #fff;
				}

				p4{
				font-family:Century Gothic, sans-serif;
				font-size:12%;
				color: #fff;
				}

				
				
				.tablin{
				font-size:9px;
				color: #fff;
				}
				  </style>";
				//echo "</br><p align='center'>Los n&uacute;meros de los resultados que aparecen abajo, muestran los paquetes did&aacutecticos que debes consultar de acuerdo a tu nivel.</p></br>";


				if($alfa==1){//If para el primer semestre de CCH


				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='7%'><b>#Cuenta</b></td>
						<td width='7%'><b>Nombre</b></td>
						<td width='7%'><b>Be+</b></td>
						<td width='7%'><b>Subject pronouns</b></td>
						<td width='7%'><b>Be-</b></td>
						<td width='7%'><b>Nationalities</b></td>
						<td width='7%'><b>Possessive adjectives</b></td>
						<td width='7%'><b>Wh questions</b></td>
						<td width='7%'><b>A / an</b></td>
						<td width='7%'><b>Family members</b></td>
						<td width='7%'><b>Questions W / How</b></td>
						<td width='7%'><b>Listening</b></td>
						<td width='7%'><b>Reading</b></td>
						<td width='10%'><b>Resultado</b></td>				
				</tr>";

				if(empty($_POST[Cuenta])){
					echo " Grupo: ".$_POST[Grupo];
					echo"<br/><br/>";
					$sql = "select * from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";} //Arreglar el tamaño de la consulta

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}

				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql)){
					echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
					<tr align='center'>	
						<td width='7%'>".$row["Cuenta"]."</td>	
						<td width='7%'>".$row["Nombre"]."</td>";
						$conexion->imprime($row,'NO','t1',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=1&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t2',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t3',7,'http://www.cgl-unam.comze.com/control_paq.php?p=3&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t4',7,'http://www.cgl-unam.comze.com/control_paq.php?p=4&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t5',7,'http://www.cgl-unam.comze.com/control_paq.php?p=5&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t6',7,'http://www.cgl-unam.comze.com/control_paq.php?p=6&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t7',7,'http://www.cgl-unam.comze.com/control_paq.php?p=7&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t8',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=8&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t9',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=9&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','t10',7, '#','#08088A');
								$conexion->imprime($row,'NO','t11',7,'#','#08088A');
								$conexion->imprime($row,'NO SATISFACTORIO','t12',10, '#','#08088A');	
						echo"
					</tr>";
				}
				echo"</table>";
			}//Cierra el if de 1er semestre

	//**********************************************Sección Tercer Semestre*************************************************************************************************************
	//**********************************************Sección Tercer Semestre*************************************************************************************************************
	//**********************************************Sección Tercer Semestre*************************************************************************************************************

			if($alfa==3){


				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='9%'><b>#Cuenta</b></td>
						<td width='10%'><b>Nombre</b></td>
						<td width='9%'><b>Be</b></td>
						<td width='9%'><b>Listening</b></td>
						<td width='9%'><b>Reading</b></td>
						<td width='9%'><b>Simple present</b></td>
						<td width='9%'><b>Comparatives / Superlatives</b></td>
						<td width='9%'><b>Past be</b></td>
						<td width='9%'><b>There Was / There were</b></td>
						<td width='9%'><b>Past tense</b></td>
						<td width='9%'><b>Resultado</b></td>
						
				</tr>";

				if(empty($_POST[Cuenta])){
				echo " Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select * from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='9%'>".$row["Cuenta"]."</td>	
					<td width='10%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=1c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t10',9,'#'.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t11',9,'#'.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t13',9,'http://www.cgl-unam.comze.com/control_paq.php?p=2c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t14',9,'http://www.cgl-unam.comze.com/control_paq.php?p=3c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t15',9,'http://www.cgl-unam.comze.com/control_paq.php?p=4c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t16',9,'http://www.cgl-unam.comze.com/control_paq.php?p=5c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t17',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=6c&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO SATISFACTORIO','t12',9, '#','#08088A');		
					echo"
				</tr>";
				}
				echo"</table>";
			}//Termina el If para tercer semestre*******************************************************************************************************************************
			//**********************************************Sección Cuarto año************************************************************************************************************
			//**********************************************Sección Cuarto Año *************************************************************************************************************
			//**********************************************Sección Cuarto Año *************************************************************************************************************

			if($alfa==4){
			
					echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
					<tr align='center'>		
					<td width='7%'><b>#Cuenta</b></td>
					<td width='7%'><b>Nombre</b></td>
					<td width='7%'><b>Be+</b></td>
					<td width='7%'><b>Subject pronouns</b></td>
					<td width='7%'><b>Be-</b></td>
					<td width='7%'><b>Nationalities</b></td>
					<td width='7%'><b>Possessive adjectives</b></td>
					<td width='7%'><b>Wh questions</b></td>
					<td width='7%'><b>A / an</b></td>
					<td width='7%'><b>Family members</b></td>
					<td width='7%'><b>Questions W / How</b></td>
					<td width='7%'><b>Listening</b></td>
					<td width='7%'><b>Reading</b></td>
					<td width='10%'><b>Resultado</b></td>				
					</tr>";

				if(empty($_POST[Cuenta])){
					echo " Grupo: ".$_POST[Grupo];
					echo"<br/><br/>";
					$sql = "select * from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";} //Arreglar el tamaño de la consulta

				if(empty($_POST[Plantel])){
					$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}

				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
					echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
					<tr align='center'>	
					<td width='7%'>".$row["Cuenta"]."</td>	
					<td width='7%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=1&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t2',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t3',7,'http://www.cgl-unam.comze.com/control_paq.php?p=3&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t4',7,'http://www.cgl-unam.comze.com/control_paq.php?p=4&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t5',7,'http://www.cgl-unam.comze.com/control_paq.php?p=5&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t6',7,'http://www.cgl-unam.comze.com/control_paq.php?p=6&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t7',7,'http://www.cgl-unam.comze.com/control_paq.php?p=7&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t8',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=8&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t9',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=9&c='.$row[Cuenta].'','#08088A');
							$conexion->imprime($row,'NO','t10',7, '#','#08088A');
							$conexion->imprime($row,'NO','t11',7,'#','#08088A');
							$conexion->imprime($row,'NO SATISFACTORIO','t12',10, '#','#08088A');	
					echo"
				</tr>";
				}//Fin del while de la BD
				echo"</table>";
			}//Termina el If para cuarto año ******************************************************************************************************************************
			
			
			//**********************************************Sección Quinto Año*************************************************************************************************************
	//**********************************************Sección Quinto Año*************************************************************************************************************
	//**********************************************Sección Quinto Año*************************************************************************************************************

			if($alfa==5){
				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='9%'><b>#Cuenta</b></td>
						<td width='10%'><b>Nombre</b></td>
						<td width='9%'><b>Be</b></td>
						<td width='9%'><b>Demonstratives</b></td>
						<td width='9%'><b>Used to</b></td>
						<td width='9%'><b>Simple past</b></td>
						<td width='9%'><b>Should</b></td>
						<td width='9%'><b>Listening</b></td>
						<td width='9%'><b>Reading</b></td>
						<td width='9%'><b>Simple present</b></td>
						<td width='9%'><b>Resultado</b></td>
						
				</tr>";

				if(empty($_POST[Cuenta])){
				echo " Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select * from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='9%'>".$row["Cuenta"]."</td>	
					<td width='10%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=1e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO','t2',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO','t3',7,'http://www.cgl-unam.comze.com/control_paq.php?p=3e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO','t4',7,'http://www.cgl-unam.comze.com/control_paq.php?p=4e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO','t5',7,'http://www.cgl-unam.comze.com/control_paq.php?p=5e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO','t10',7,'#','#08088A');
					$conexion->imprime($row,'NO','t11',7,'#','#08088A');
					$conexion->imprime($row,'NO','t13',7,'http://www.cgl-unam.comze.com/control_paq.php?p=6e&c='.$row[Cuenta].'','#08088A');
					$conexion->imprime($row,'NO SATISFACTORIO','t12',10, '#','#08088A');		
					echo"
				</tr>";
				}
				echo"</table>";
			}//Termina el If para quinto año*******************************************************************************************************************************
			
			
			//**********************************************Sección Sexto Año*************************************************************************************************************
	//**********************************************Sección Sexto Año*************************************************************************************************************
	//**********************************************Sección Sexto Año*************************************************************************************************************

			if($alfa==6){
				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='20%'><b>#Cuenta</b></td>
						<td width='20%'><b>Nombre</b></td>
						<td width='20%'><b>Inferencias</b></td>
						<td width='20%'><b>Lectura global</b></td>
						<td width='20%'><b>Resultado</b></td>
						
				</tr>";

				if(empty($_POST[Cuenta])){
				echo " Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select * from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='20%'>".$row["Cuenta"]."</td>	
					<td width='20%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t10',20, 'http://www.cgl-unam.comze.com/control_paq.php?p=1e6&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO','t11',20,'http://www.cgl-unam.comze.com/control_paq.php?p=2e6&c='.$row[Cuenta].'','#08088A');
						$conexion->imprime($row,'NO SATISFACTORIO','t12',20, '#','#08088A');			
					echo"
				</tr>";
				}
				echo"</table>";
			}//Termina el If para sexto año*******************************************************************************************************************************
		}//Fin de la verificación consulta nula
		else{//En caso de que la consulta sea nula
			echo "Los datos proporcionados no se encuentran en la Base de Datos";	
			echo "<br/><br/><u><a href='Intermedio2014.html'>Intenta nuevamente</a></u>";
		}
	}//Cierra el if de si es alumno o profesor	

	
	
	/********************************************************************************************************************************************************************************************************************************************************************************************************************************* **Profesores
			**		
			*  *
			**
			*/
	
	
	if(empty($_POST[Cuenta])){
		
		$sql_p = "select t1 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]' Limit 1";
		$sql_p=$conexion->consulta($sql_p);
		if(mysql_num_rows($sql_p)>0){//Verificación de consulta nula
			
			$gpo=substr($_POST[Grupo],0,1);		
			if($gpo==1){
			$alfa="p1";
			}
			if($gpo==3){
			$alfa="p3";
			}
			if($gpo==4){
			$alfa="p4";
			}
			if($gpo==5){
			$alfa="p5";
			}
			if($gpo==6){
			$alfa="p6";
			}
		//echo "Nivel: ".$alfa;//Imprime el nivel que se obtuvo para efectos de prueba
		
	//**********************************************Sección*Profesor*****************************************************************************************************************

			//If para Profesores		
				echo"	</br><p class='eval' style='color: #fff;'>Estimado Profesor(a) de Inglés:<br/><br/>
				La siguiente tabla de resultados muestra si el manejo de cada tema o habilidad permite al alumno avanzar sin problemas en su aprendizaje del ingl&eacute;s; &quot;SI&quot; significa que el manejo del tema o habilidad es suficiente, &quot;NO&quot; indica que es necesario que el alumno trabaje y mejore dicho tema o habilidad.</br></br>

				La &uacute;ltima columna indica si el desempe&ntilde;o de cada alumno fue el esperado para el nivel correspondiente a esta etapa del aprendizaje, de acuerdo con los programas de las asignaturas y los est&aacute;ndares del Marco Com&uacute;n Europeo de Referencia para las Lenguas.</br></br>

				Alumnos con resultado final <b>&quot;NO SATISFACTORIO&quot;</b>: son aquellos cuyos conocimientos esperados para los cursos de Ingl&eacute;s no se encuentran firmemente asimilados. Adem&aacute;s, sus habilidades de comprensi&oacute;n auditiva y de lectura tambi&eacute;n se encuentran por debajo de lo esperado, por lo cual es aconsejable hacer un seguimiento de actividades de apoyo en Mediateca a través de Paquetes Didácticos.</br></br>
					
				Los resultados que aparecen como NP significan que el alumno no present&oacute; el examen en cuesti&oacute;n. En estos casos se recomienda que los alumnos presenten dicho examen en el próximo ciclo a fin de tener su registro en orden.</br>
				</p>
				";
					
				echo"<style type='text/css'>
				a:hover{color:#cb9d01;}
			  p {
				font-family:Century Gothic, sans-serif;
				font-size:11%;
				color: #fff;
				}

				p4{
				font-family:Century Gothic, sans-serif;
				font-size:12%;
				color: #fff;
				}

				
				
				.tablin{
				font-size:9px;
				color: #fff;
				}
			  </style>";
			
	//************************************************************Sección Primer Semestre Profesor*********************************************************************************		
			if($alfa=="p1"){
			echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
			<tr align='center'>		
					<td width='7%'><b>#Cuenta</b></td>
					<td width='7%'><b>Nombre</b></td>
					<td width='7%'><b>Be+</b></td>
					<td width='7%'><b>Subject pronouns</b></td>
					<td width='7%'><b>Be-</b></td>
					<td width='7%'><b>Nationalities</b></td>
					<td width='7%'><b>Possessive adjectives</b></td>
					<td width='7%'><b>Wh questions</b></td>
					<td width='7%'><b>A / an</b></td>
					<td width='7%'><b>Family members</b></td>
					<td width='7%'><b>Questions W / How</b></td>
					<td width='7%'><b>Listening</b></td>
					<td width='7%'><b>Reading</b></td>
					<td width='10%'><b>Resultado</b></td>
					
			</tr>";

			if(empty($_POST[Cuenta])){
				echo $_POST[Plantel]." Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select Cuenta, Nombre,t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";} //Arreglar el tamaño de la consulta
				
				$sql=$conexion->consulta($sql);			
					while($row=mysql_fetch_array($sql))
					{
					echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
					<tr align='center'>	
						<td width='7%'>".$row["Cuenta"]."</td>	
						<td width='7%'>".$row["Nombre"]."</td>";
						$conexion->imprime($row,'NO','t1',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=1&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t2',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t3',7,'http://www.cgl-unam.comze.com/control_paq.php?p=3&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t4',7,'http://www.cgl-unam.comze.com/control_paq.php?p=4&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t5',7,'http://www.cgl-unam.comze.com/control_paq.php?p=5&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t6',7,'http://www.cgl-unam.comze.com/control_paq.php?p=6&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t7',7,'http://www.cgl-unam.comze.com/control_paq.php?p=7&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t8',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=8&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t9',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=9&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t10',7, '#','#08088A');
						$conexion->imprime($row,'NO','t11',7,'#','#08088A');
						$conexion->imprime($row,'NO SATISFACTORIO','t12',10, '#','#08088A');		
						echo"
					</tr>";
					}
					echo"</table>";
				
				
			}//Cierra el if de 1er semestre

	//**********************************************Sección Tercer Semestre Profesor*****************************************************************************************************
			if($alfa=="p3"){

				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='9%'><b>#Cuenta</b></td>
						<td width='10%'><b>Nombre</b></td>
						<td width='9%'><b>Be</b></td>
						<td width='9%'><b>Listening</b></td>
						<td width='9%'><b>Reading</b></td>
						<td width='9%'><b>Simple present</b></td>
						<td width='9%'><b>Comparatives / Superlatives</b></td>
						<td width='9%'><b>Past be</b></td>
						<td width='9%'><b>There Was / There were</b></td>
						<td width='9%'><b>Past tense</b></td>
						<td width='9%'><b>Resultado</b></td>
				</tr>";
				if(empty($_POST[Cuenta])){
				echo $_POST[Plantel]." Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select Cuenta, Nombre, t1, t10, t11, t13, t14, t15, t16,t17, t12 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select Cuenta, Nombre, t1, t10, t11, t13, t14, t15, t16,t17, t12 from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='9%'>".$row["Cuenta"]."</td>	
					<td width='10%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=1&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t10',9,'#','#08088A');
					$conexion->imprime($row,'NO','t11',9,'#','#08088A');
					$conexion->imprime($row,'NO','t13',9,'http://www.cgl-unam.comze.com/control_paq.php?p=2c&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t14',9,'http://www.cgl-unam.comze.com/control_paq.php?p=3c&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t15',9,'http://www.cgl-unam.comze.com/control_paq.php?p=4c&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t16',9,'http://www.cgl-unam.comze.com/control_paq.php?p=5c&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t17',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=6c&c=444455555','#08088A');
					$conexion->imprime($row,'NO SATISFACTORIO','t12',9, '#','#08088A');		
					echo"
				</tr>";
				}//Termina el while de la DB
				echo"</table>";
			}//Termina el If para tercer semestre*******************************************************************************************************************************	
				
	//**********************************************Sección Cuarto Año Profesor*****************************************************************************************************
			if($alfa=="p4"){

				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
					<tr align='center'>		
					<td width='7%'><b>#Cuenta</b></td>
					<td width='7%'><b>Nombre</b></td>
					<td width='7%'><b>Be+</b></td>
					<td width='7%'><b>Subject pronouns</b></td>
					<td width='7%'><b>Be-</b></td>
					<td width='7%'><b>Nationalities</b></td>
					<td width='7%'><b>Possessive adjectives</b></td>
					<td width='7%'><b>Wh questions</b></td>
					<td width='7%'><b>A / an</b></td>
					<td width='7%'><b>Family members</b></td>
					<td width='7%'><b>Questions W / How</b></td>
					<td width='7%'><b>Listening</b></td>
					<td width='7%'><b>Reading</b></td>
					<td width='10%'><b>Resultado</b></td>				
					</tr>";

				if(empty($_POST[Cuenta])){
					echo $_POST[Plantel]." Grupo: ".$_POST[Grupo];
					echo"<br/><br/>";
					$sql = "select Cuenta, Nombre, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";} //Arreglar el tamaño de la consulta

				if(empty($_POST[Plantel])){
					$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}

				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
					echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
					<tr align='center'>	
					<td width='7%'>".$row["Cuenta"]."</td>	
					<td width='7%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=1&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t2',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t3',7,'http://www.cgl-unam.comze.com/control_paq.php?p=3&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t4',7,'http://www.cgl-unam.comze.com/control_paq.php?p=4&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t5',7,'http://www.cgl-unam.comze.com/control_paq.php?p=5&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t6',7,'http://www.cgl-unam.comze.com/control_paq.php?p=6&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t7',7,'http://www.cgl-unam.comze.com/control_paq.php?p=7&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t8',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=8&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t9',7, 'http://www.cgl-unam.comze.com/control_paq.php?p=9&c=444455555','#08088A');
						$conexion->imprime($row,'NO','t10',7, '#','#08088A');
						$conexion->imprime($row,'NO','t11',7,'#','#08088A');
						$conexion->imprime($row,'NO SATISFACTORIO','t12',10, '#','#08088A');	
					echo"
				</tr>";
				}//Termina el while de la DB
				echo"</table>";
			}//Termina el If para cuarto año*******************************************************************************************************************************	
				
	//**********************************************Sección Quinto Año Profesor*****************************************************************************************************
			if($alfa=="p5"){

				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='9%'><b>#Cuenta</b></td>
						<td width='10%'><b>Nombre</b></td>
						<td width='9%'><b>Be</b></td>
						<td width='9%'><b>Demonstratives</b></td>
						<td width='9%'><b>Used to</b></td>
						<td width='9%'><b>Simple past</b></td>
						<td width='9%'><b>Should</b></td>
						<td width='9%'><b>Listening</b></td>
						<td width='9%'><b>Reading</b></td>
						<td width='9%'><b>Simple present</b></td>
						<td width='9%'><b>Resultado</b></td>
						
				</tr>";

				if(empty($_POST[Cuenta])){
				echo $_POST[Plantel]." Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select Cuenta, Nombre, t1, t2, t3, t4, t5, t10, t11, t13, t12 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='9%'>".$row["Cuenta"]."</td>	
					<td width='10%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t1',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=1e&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t2',9,'http://www.cgl-unam.comze.com/control_paq.php?p=2e&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t3',9,'http://www.cgl-unam.comze.com/control_paq.php?p=3e&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t4',9,'http://www.cgl-unam.comze.com/control_paq.php?p=4e&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t5',9,'http://www.cgl-unam.comze.com/control_paq.php?p=5e&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t10',9,'#','#08088A');
					$conexion->imprime($row,'NO','t11',9,'#','#08088A');
					$conexion->imprime($row,'NO','t13',9, 'http://www.cgl-unam.comze.com/control_paq.php?p=6e&c=444455555','#08088A');
					$conexion->imprime($row,'NO SATISFACTORIO','t12',9, '#','#08088A');			
					echo"
				</tr>";
				}//Termina el while de la DB
				echo"</table>";
			}//Termina el If para quinto año*******************************************************************************************************************************	

	//**********************************************Sección Sexto Año Profesor*****************************************************************************************************
			if($alfa=="p6"){

				echo "<table class='tablin' border='1' align='center' width='100%' cellpadding='1' cellspacing='1'>
				<tr align='center'>		
						<td width='20%'><b>#Cuenta</b></td>
						<td width='20%'><b>Nombre</b></td>
						<td width='20%'><b>Inferencias</b></td>
						<td width='20%'><b>Lectura global</b></td>
						<td width='20%'><b>Resultado</b></td>
						
				</tr>";

				if(empty($_POST[Cuenta])){
				echo $_POST[Plantel]." Grupo: ".$_POST[Grupo];
				echo"<br/><br/>";
				$sql = "select Cuenta, Nombre, t10, t11, t12 from Intermedio2014 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";}

				if(empty($_POST[Plantel])){
				$sql = "select * from Intermedio2014 where Cuenta='$_POST[Cuenta]'";}
				$sql=$conexion->consulta($sql);

				while($row=mysql_fetch_array($sql))
				{
				echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>	
					<td width='20%'>".$row["Cuenta"]."</td>	
					<td width='20%'>".$row["Nombre"]."</td>";
					$conexion->imprime($row,'NO','t10',20, 'http://www.cgl-unam.comze.com/control_paq.php?p=1e6&c=444455555','#08088A');
					$conexion->imprime($row,'NO','t11',20,'http://www.cgl-unam.comze.com/control_paq.php?p=2e6&c=444455555','#08088A');
					$conexion->imprime($row,'NO SATISFACTORIO','t12',20, '#','#08088A');			
					echo"
				</tr>";
				}//Termina el while de la DB
				echo"</table>";
			}//Termina el If para sexto año*******************************************************************************************************************************			
				
			echo"</body>";
			
		}
		else{
			echo "Los datos proporcionados no se encuentran en la Base de Datos";	
			echo "<br/><br/><u><a href='Intermedio2014.html'>Intenta nuevamente</a></u>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><a href='http://www.cgl-unam.comze.com/paqt.php?'>Regresa a los paquetes didácticos</a></u>";			
		}
	}
?>
		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2014. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>
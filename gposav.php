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
	
	
		<?php
			function encabezado($porcentaje,$nFlotante, $nombre){
				echo"<td class='giro' width='".$porcentaje."%'><font color='#000066'><b title='".$nFlotante."'>".$nombre."</b></font></td>";
			}
		?>
	
		
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Grupos avanzados</b>
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
		
	//**********************************************Sección Primer Semestre Alumnos******************************************************************************************************
			
			
				echo"	</br><p class='eval' style='color: #fff;'>Esta tabla indica el dominio de las temáticas fundamentales del Examen Diagnóstico Final de los alumnos avanzados. Las temáticas marcadas con “NO” son aquellas en las cuales cada uno de sus alumnos necesita reforzar.</br>
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

				
				.headers{
				font-size:11px;
				color: #fff;
				}
				
				.tablin{
				font-size:9px;
				color: #fff;
				}
				
				div.tabla_centro{
				text-align: center;
				}

				div.tabla_centro table {
				margin: 0 auto;
				text-align: center;
				}			
				
				  </style>";
				echo "<div class='tabla_centro'>";				  
				$sql0 = "update avanzadosCCH14 set Visitas=Visitas+1 where Grupo='$_POST[Grupo]' AND Plantel='$_POST[Plantel]'";
				$sql0=$conexion->consulta($sql0);
				echo "<table class='tablin' border='1' align='center' width='72%' cellpadding='0' cellspacing='0'>
						<tr align='center'>
							<td width='12%'><font color='#000066'><b>1.</b></font> Be</td>
							<td width='12%'><font color='#000066'><b>2.</b></font> WH questions</td>
							<td width='12%'><font color='#000066'><b>3.</b></font> A / an</td>
							<td width='12%'><font color='#000066'><b>4.</b></font> Family relationships</td>
							<td width='12%'><font color='#000066'><b>5.</b></font> Possessive adjectives</td>
							<td width='12%'><font color='#000066'><b>6.</b></font> Telling the time</td>
						</tr>
						<tr align='center'>
							<td width='12%'><font color='#000066'><b>7.</b></font> Simple present</td>
							<td width='12%'><font color='#000066'><b>8.</b></font> There is / there are</td>
							<td width='12%'><font color='#000066'><b>9.</b></font> Present continuous</td>
							<td width='12%'><font color='#000066'><b>10.</b></font> Going to for future plans</td>
							<td width='12%'><font color='#000066'><b>11.</b></font> Simple past verb be</td>
							<td width='12%'><font color='#000066'><b>12.</b></font> Simple past</td>
						</tr>
						<tr align='center'>
							<td width='12%'><font color='#000066'><b>13.</b></font> Comparatives / superlatives</td>
							<td width='12%'><font color='#000066'><b>14.</b></font> Present perfect</td>
							<td width='12%'><font color='#000066'><b>15.</b></font> Passive voice in the past tense</td>
							<td width='12%'><font color='#000066'><b>16.</b></font> Past progressive</td>
							<td width='12%'><font color='#000066'><b>17.</b></font> Object pronouns</td>
							<td width='12%'><font color='#000066'><b>18.</b></font> Adverbs too / enough</td>
						</tr>
						<tr align='center'>
							<td width='12%'><font color='#000066'><b>19.</b></font> First conditional</td>
							<td width='12%'><font color='#000066'><b>20.</b></font> While / when</td>
							<td width='12%'><font color='#000066'><b>21.</b></font> Indefinite pronouns</td>
							<td width='12%'><font color='#000066'><b>22.</b></font> Gerunds / infinitives</td>
							<td width='12%'><font color='#000066'><b>23.</b></font> Tag questions</td>
						</tr>
					</table></br></br>";
				
				echo"<b>Grupo: ".$_POST[Grupo]."</b></div>";
				echo "<table class='headers' border='1' align='center' width='100%' cellpadding='0' cellspacing='0'>
				<tr align='center'>";
				encabezado(7, '#Cuenta','#Cuenta');
				encabezado(8, 'Nombre','Nombre');
				encabezado(3, 'Be','1');
				encabezado(3, 'WH questions','2');
				encabezado(3, 'A / an','3');
				encabezado(3, 'Family relationships', '4');
				encabezado(3,'Possessive adjectives','5');
				encabezado(3,'Telling the time','6');
				encabezado(3,'Simple present','7');
				encabezado(3,'There is / are','8');
				encabezado(3,'Present continuous','9');
				encabezado(3,'Going to for future plans','10');
				encabezado(3,'Simple past verb be','11');
				encabezado(3,'Simple past','12');
				encabezado(3,'Comparatives / superlatives','13');
				encabezado(3,'Present perfect','14');
				encabezado(3,'Passives voice in the past tense','15');				
				encabezado(3,'Past progressive','16');
				encabezado(3,'Object pronouns','17');
				encabezado(3,'Adverbs too / enough','18');
				encabezado(3,'First conditional','19');
				encabezado(3,'While / when','20');
				encabezado(3,'Indefinite pronouns','21');
				encabezado(3,'Gerunds / infinitives','22');
				encabezado(3,'Tag questions','23');
				$sql = "select Cuenta, Nombre, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12, t13, t14, t15, t16, t17, t18, t19, t20, t21, t22, t23 from avanzadosCCH14 where Grupo='$_POST[Grupo]' AND Plantel='$_POST[Plantel]'";				
				$sql=$conexion->consulta($sql);
				while($row=mysql_fetch_array($sql)){
					echo "<table border='1' class='tablin' align='center' width='100%' cellpadding='0' cellspacing='0'>
					<tr align='center'>";	
								$conexion->imprime($row,'NO','Cuenta',7,'http://www.cgl-unam.comze.com/control_paq.php?p=2&c='.$row[Cuenta].'','#08088A');
								$conexion->imprime($row,'NO','Nombre',8,'http://www.cgl-unam.comze.com/control_paq.php?p=3&c='.$row[Nombre].'','#08088A');
								$conexion->imprime($row,'NO','t1',3,'#','#08088A');
								$conexion->imprime($row,'NO','t2',3,'#','#08088A');
								$conexion->imprime($row,'NO','t3',3,'#','#08088A');
								$conexion->imprime($row,'NO','t4',3,'#','#08088A');
								$conexion->imprime($row,'NO','t5',3, '#','#08088A');
								$conexion->imprime($row,'NO','t6',3, '#','#08088A');
								$conexion->imprime($row,'NO','t7',3, '#','#08088A');
								$conexion->imprime($row,'NO','t8',3, '#','#08088A');
								$conexion->imprime($row,'NO','t9',3, '#','#08088A');
								$conexion->imprime($row,'NO','t10',3, '#','#08088A');
								$conexion->imprime($row,'NO','t11',3, '#','#08088A');
								$conexion->imprime($row,'NO','t12',3, '#','#08088A');
								$conexion->imprime($row,'NO','t13',3, '#','#08088A');
								$conexion->imprime($row,'NO','t14',3, '#','#08088A');
								$conexion->imprime($row,'NO','t15',3, '#','#08088A');
								$conexion->imprime($row,'NO','t16',3, '#','#08088A');
								$conexion->imprime($row,'NO','t17',3, '#','#08088A');
								$conexion->imprime($row,'NO','t18',3, '#','#08088A');
								$conexion->imprime($row,'NO','t19',3, '#','#08088A');
								$conexion->imprime($row,'NO','t20',3, '#','#08088A');
								$conexion->imprime($row,'NO','t21',3, '#','#08088A');
								$conexion->imprime($row,'NO','t22',3, '#','#08088A');
								$conexion->imprime($row,'NO','t23',3, '#','#08088A');
					echo "</tr>";
					
				}
				echo"</table>";
	
		
		/*else{//En caso de que la consulta sea nula
			echo "Los datos proporcionados no se encuentran en la Base de Datos";	
			echo "<br/><br/><u><a href='Final2014.html'>Intenta nuevamente</a></u>";
		}

	
	
	
			echo"</body>";
			
		
		else{
			echo "Los datos proporcionados no se encuentran en la Base de Datos";	
			echo "<br/><br/><u><a href='Final2014.html'>Intenta nuevamente</a></u>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><a href='http://www.cgl-unam.comze.com/paqt.php?'>Regresa a los paquetes didácticos</a></u>";			
		}*/
	
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
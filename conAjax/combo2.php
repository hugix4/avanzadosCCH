<?php
require_once("conexionh.php");
$conexion=new conexion();
$conexion->conectar();
$Plantel=$_POST["Plantel"];
$p=$_GET['p'];
$g=$_GET['g'];
 
			function encabezado($porcentaje,$nFlotante, $nombre){
				echo"<td class='giro' width='".$porcentaje."%'><font color='#000066'><b title='".$nFlotante."'>".$nombre."</b></font></td>";
			}
	
if($p==null || $g==null){
	//hacemos el query para obtener los datos segun la
	//variable obtenida
	$sql="SELECT distinct Grupo FROM avanzadosCCH14 Where Plantel='$Plantel'";
	$sql=$conexion->consulta($sql); 
	?>
	<!--Este es el verdadero combo2 que mostramos con los datos cargados-->
	<div style="text-align: center;">
		Grupo: <select id='combo2' >
		<option>Seleccionar</option>
		<?php      
		  while($row=mysql_fetch_array($sql)) {   
			echo "<option value='{$row['Grupo']}'>{$row['Grupo']}</option>";
		  }        
		?>
		</select>
	</div>

<?php
}//Fin del primer If que checa a las variables nulas
else{
	echo"	</br><p class='eval' style='color: #fff;'>Esta tabla indica el dominio de las tem&aacute;ticas fundamentales del Examen Diagn&oacute;stico Inicial 2015 de los alumnos avanzados. Las tem&aacute;ticas marcadas con &quot;NO&quot; son aquellas en las cuales cada uno de sus alumnos necesita reforzar.</br>
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
						<tr align='left'>
							<td width='12%'><font color='#000066'><b>1.</b></font> Be</td>
							<td width='12%'><font color='#000066'><b>2.</b></font> WH questions</td>
							<td width='12%'><font color='#000066'><b>3.</b></font> A / an</td>
							<td width='12%'><font color='#000066'><b>4.</b></font> Family relationships</td>
							<td width='12%'><font color='#000066'><b>5.</b></font> Possessive adjectives</td>
							<td width='12%'><font color='#000066'><b>6.</b></font> Telling the time</td>
						</tr>
						<tr align='left'>
							<td width='12%'><font color='#000066'><b>7.</b></font> Simple present</td>
							<td width='12%'><font color='#000066'><b>8.</b></font> There is / there are</td>
							<td width='12%'><font color='#000066'><b>9.</b></font> Present continuous</td>
							<td width='12%'><font color='#000066'><b>10.</b></font> Going to for future plans</td>
							<td width='12%'><font color='#000066'><b>11.</b></font> Simple past verb be</td>
							<td width='12%'><font color='#000066'><b>12.</b></font> Simple past</td>
						</tr>
						<tr align='left'>
							<td width='12%'><font color='#000066'><b>13.</b></font> Comparatives / superlatives</td>
							<td width='12%'><font color='#000066'><b>14.</b></font> Present perfect</td>
							<td width='12%'><font color='#000066'><b>15.</b></font> Passive voice in the past tense</td>
							<td width='12%'><font color='#000066'><b>16.</b></font> Past progressive</td>
							<td width='12%'><font color='#000066'><b>17.</b></font> Object pronouns</td>
							<td width='12%'><font color='#000066'><b>18.</b></font> Adverbs too / enough</td>
						</tr>
						<tr align='left'>
							<td width='12%'><font color='#000066'><b>19.</b></font> First conditional</td>
							<td width='12%'><font color='#000066'><b>20.</b></font> While / when</td>
							<td width='12%'><font color='#000066'><b>21.</b></font> Indefinite pronouns</td>
							<td width='12%'><font color='#000066'><b>22.</b></font> Gerunds / infinitives</td>
							<td width='12%'><font color='#000066'><b>23.</b></font> Tag questions</td>
						</tr>
					</table></br></br>";
				
				echo"<b>Plantel: ".$p."</b> <b>Grupo: ".$g."</b></div>";
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
				$sql = "select Cuenta, Nombre, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12, t13, t14, t15, t16, t17, t18, t19, t20, t21, t22, t23 from avanzadosCCH14 where Grupo='$g' AND Plantel='$p'";				
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
}

	
?>
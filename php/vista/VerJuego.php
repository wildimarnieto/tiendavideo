
<!DOCTYPE html>
<html lang="es">
	<head>
 		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
		<script type="text/javascript" src="../../js/script.js"></script>
		<script type="text/javascript" src="../../js/jquery.js"></script>
		<title>Catalogo de VideoJuegos</title>	
	</head>
 		
 	<body>
		<header id='Titulo'>
			<h1>Prestamo de Videojuegos</h1>
		</header><!--Termina header del body-->
		<section id="Juegos">
			<?php
				require ('../modelo/Db.php');
				require '../control/Controller_Juegos.php';
				require '../control/Controller_Categoria.php';
				$id= $_GET["ID"];
				$cate = new Controller_Categoria();
				$cont = new Controller_Juegos();
				$datos = $cont->get_Juego($id);
				$categori = $cate->get_Categorias();
				foreach ($datos as &$dato) {
					foreach ($categori as &$catego){
					if($catego["ID"] == $dato["IDCATEGORIA"])
					echo  "
						<header>
							<h1 id='TituloJuegoSelect'>".$dato["NOMBRE"]."</h1>
						</header>						
						<article id='SelectJuego'>
						<iframe class='youtube-player' type='text/html' id='Video' src='http://www.youtube.com/embed/".$dato["VIDEO"]."' frameborder='0'></iframe>
						<table  id='TablaInfo' >
							<tr >
								<td>
									<div aling=left>Cantidad:  ".$dato["CANTIDAD"]." </div>
									<div aling=left>Precio por dia: $".$dato["PRECIO"]."</div>
                   					<label for='tiempo'>Tiempo Prestamo: 
                    				<input type='number' name='tiempo' id='tiempo' value='0' Style='width:40Px' /></label>                    				
							</tr>
							<tr>
								<td>
									<p>Descripci&oacute;n:".$dato["DESCRIPCION"]." </p>
								</td>
							</tr>
							<tr>
								<td>
									<p> Plataforma:".$dato["PLATAFORMA"]."<br>
									Categoria: ".$catego["DESCRIPCION"]."</p>
								</td>								
							</tr>
						</table>
						
					</article>
					";
				}
				}
				
			?>
		</table>
	</section>
	</body>
	<aside>
		
			
					<br>
                                        <center>	<a href='../../index.php' >INICIO</a> </center>
					<br>
					
					
				

			
		

	</aside>
	<footer>

	</footer>
</html>	
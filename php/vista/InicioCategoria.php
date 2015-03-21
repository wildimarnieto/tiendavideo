
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
			<header id='TituloJuegoSelect'>
				<h1>Prestamo de VideoJuegos</h1>
			</header>
					<?php
						require ('../modelo/Db.php');
						require '../control/Controller_Juegos.php';
						$cont = new Controller_Juegos();
						$datos = $cont->get_Juegos();
						
						foreach ($datos as &$dato) {
							if($dato["IDCATEGORIA"] == $_GET["ID"]){
								echo  "
									<article class='Producto'>
										<img class='ImagenJuego' src='../../".$dato["IMAGEN"]."' onclick='DescripcionJuego(this.id)' id=".$dato["IDJUEGO"]."></img>
										<div class='Text'>Cantidad:  ".$dato["CANTIDAD"]." </div>
										<div class='Text'>Precio por dia: $".$dato["PRECIO"]."</div>
									</article>
										";
							}
						}
					?>
		</section>
	</body>	
	<aside>
		
		<?php
			require '../control/Controller_Categoria.php';
			
			
						echo "<h1>CATEGORIAS</h1>
			<ul id='Categorias'>			";			$cate = new Controller_Categoria();
			$datos = $cate->get_Categorias();
			foreach ($datos as &$dato) {
				echo  "<li ><a href='InicioCategoria.php?ID=".$dato["ID"]."' >".$dato["DESCRIPCION"]."</a></li>";
			}

		?>
            <li ><a href='../../index.php' >Todas</a></li>
		</ul>
		 				 
			  
		</ul>  


	</aside>
	
</html>
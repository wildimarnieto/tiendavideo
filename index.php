

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript" src="/js/jquery.js"></script>
        <title>TIENDA VIDEO JUEGOS</title>
    </head>
<body>
     
        <header id='Titulo'>
            <h1><center>Prestamo  Videojuegos</center> </h1>
            <center> <img class='ImagenJuego' src="img/fondo.jpg"> </center>
		</header>
        

        
        
        <section id="Juegos">
			<header id='TituloJuegoSelect'>
				<h1>Prestamo de VideoJuegos</h1>
                                 
                                
			</header>
					<?php
						require ('/php/modelo/Db.php');
						require '/php/control/Controller_Juegos.php';
						$cont = new Controller_Juegos();
						$datos = $cont->get_Juegos();
						
						foreach ($datos as &$dato) {
							echo  "
								<article class='Producto'>
									<img class='ImagenJuego' src='".$dato["IMAGEN"]."'  onclick='DescripcionJuego(this.id)' id=".$dato["IDJUEGO"]."></img>
									<div class='Text'>Cantidad:  ".$dato["CANTIDAD"]." </div>
									<div class='Text'>Precio por dia: $".$dato["PRECIO"]."</div>
								</article>
									";
						}
					?>
		</section>
    
  <aside>  
    <?php
    
			require '/php/control/Controller_Categoria.php';
			
			
			
			
				
				

			
			echo "<h1>CATEGORIAS</h1>
			<ul id='Categorias'>
			";
			$cate = new Controller_Categoria();
			$datos = $cate->get_Categorias();
			foreach ($datos as &$dato) {
				echo  "<li ><a href='php/vista/InicioCategoria.php?ID=".$dato["ID"]."' >".$dato["DESCRIPCION"]."</a></li>";
			}

		?>
  </aside>
    </body>
</html>


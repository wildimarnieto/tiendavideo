<?php
	require ('/../modelo/Model_Juego.php');
	
	class Controller_Juegos{

		private $juego;
		private $datos;
		
		function __construct(){
			$this->juego=new Model_Juego();
		}

		function get_Juegos(){
			$this->datos=$this->juego->get_juegos();
			return $this->datos;
		}

		function get_Juego($id){
			$this->datos=$this->juego->get_juego($id);
			return $this->datos;
		}

		function set_Juego($nombre, $descripcion, $precio, $cantidad, $plataforma, $imagen, $video, $categoria){
			$this->datos = $this->juego->set_juego($nombre, $descripcion, $precio, $cantidad, $plataforma, $imagen, $video, $categoria);
			return $this->datos;
		}		
	}

	
	
?>
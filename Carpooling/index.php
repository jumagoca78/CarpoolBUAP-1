<?php

	//|••••••••••••••••••••••••••••••••••••••••
	//|	:::::: Documento PHP :::::::
	//|••••••••••••••••••••••••••••••••••••••••

	/*
		Estudiantes
		|Escuela: Benemérita Universidad Autónoma de Puebla
		|Estudiantes:	Emmanuel Revuelta Rodríguez
				Hugo Alexis Chiquito Onofre
				Jesús Alexis Ramírez Navor
				María García Limón
				Mario A. Núñez Zavala
		|Facebook: ----
		|Twitter: ----
		|Linked in: ----
		|GitHub: https://github.com/jesale10/CarpoolBUAP
	
		Documento
		|Fecha-documento: 2021-04-08
			
		Descripción
		    	Implementar un programa piloto en la Benemérita
			Universidad Autónoma de Puebla (BUAP),
			específicamente en el campus de Ciudad Universitaria,
		        un sistema de auto compartido (carpooling).
			Se requiere entonces desarrollar una aplicación orientada a la web
			que permita dicha implementación.
                Consideraciones
			A través de 12 historias de usuario, deducir la dificultad en cada una
			a través del método planning poker, para luego establecer el tiempo
			de desarrollo total de la aplicación, a partir de terminar la primera.		
	        Solución propuesta
			Historias de usuario 1 y 2.
			  Página principal con información general del servicio; con una página de login 
                          y una de registro que solo admite correos institucionales.
		Disign
	   		1. Se crea un formulario que recoge los datos de registro y se añade un botón
			   que confirma la operación de alta.         	 
	
        */	
	
	# En nuestro archivo index.php, mostraremos las salidas al usuario
	# así como tambíen las respuestas emitidas por el controlador a sus solicitudes.
        
        require_once "Controladores/controlador-plantilla.php";
        //require_once "Controladores/controlador-formularios.php";
        require_once "Modelos/modelo-plantilla.php";
        //require_once "Modelos/modelo-formularios.php";
          
        $ctr_plantilla = new ControladorPlantilla();
	$ctr_plantilla -> ctrGetPlantilla();

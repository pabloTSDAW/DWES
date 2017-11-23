<?php

  $titulo = @$_POST['titulo'];
  $busqueda = @$_POST['contact'];
  $genero = @$_POST['genero'];


  class Canciones{
      var $titulo;
      var $busqueda;
      var $genero;


      function Canciones($titulo=null,$busqueda=null,$genero=null){
        $this->titulo=$titulo;
        $this->busqueda=$busqueda;
        $this->genero=$genero;
      }

      function mostrarError() {
        $dom = new DOMDocument();
        $dom->loadHTMLFile("./Relacion9.2.html");
        $element = $dom->getElementById('padre');
        $element->nodeValue = '¡Debe introducir el texto de búsqueda!';
        echo $dom->saveHTML();
      }

      function correcto() {
        $dom = new DOMDocument();
        $dom->loadHTMLFile('./Relacion9.2.1.html');
        $texto = $dom->getElementById('texto');
        $bus = $dom->getElementById('bus');
        $gen = $dom->getElementById('gen');
        $texto->nodeValue = 'Texto de búsqueda: '.$this->titulo;
        $bus->nodeValue = 'Buscar en album: '.$this->busqueda;
        $gen->nodeValue = 'Género: '.$this->genero;
        echo $dom->saveHTML();
      }
    }

    if ($titulo == '') {
      $bar = new Canciones($titulo, $busqueda, $genero);
      $bar->mostrarError();
    } else {
      $bar = new Canciones($titulo, $busqueda, $genero);
      $bar->correcto();
    }



  ?>

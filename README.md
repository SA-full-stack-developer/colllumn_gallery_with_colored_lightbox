# colllumn_gallery_with_colored_lightbox

Monta una galería vertical y tiene aparte el Lightbox arcoiris para pasar las imágenes hacia abajo

# Index.html

Se compone de 3 divs principales, el primero carga la estructura de imágenes en columnas. El tercero es el que contendrá las imágenes mostradas. El tercero es el Lightbox oculto que contendrá un contendor de imágen y las flechas. Al clicar sobre cualquier imagen, esta se cargará en el contenedor del Lightbox y asignará la imagen anterior y la siguiente en las flechas.

        <div class="Gallery">
            <?php
                leerDirectorio(/*"../images/galeria/thumbs/"*/);
            ?>
        </div>
------------------------------------------------------------------------------------------------------------------------------
        <div>
            <div class="columna">
                <a data-ruta_imgg="https://images.pexels.com/photos/26279/pexels-photo-26279.jpg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" data-title="titulo 1" class="Light" title="titulo 1">
                    <img src="https://images.pexels.com/photos/26279/pexels-photo-26279.jpg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="titulo 1" title="titulo 1">
                </a>
                <a data-ruta_imgg="https://images.pexels.com/photos/167085/pexels-photo-167085.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" data-title="titulo 2" class="Light" title="titulo 2">
                    <img src="https://images.pexels.com/photos/167085/pexels-photo-167085.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="titulo 2" title="titulo 2">
                </a>
                <a data-ruta_imgg="https://images.pexels.com/photos/230128/pexels-photo-230128.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" data-title="titulo 3" class="Light" title="titulo 3">
                    <img src="https://images.pexels.com/photos/230128/pexels-photo-230128.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt="titulo 9" title="titulo 9">
                </a>
            </div>
------------------------------------------------------------------------------------------------------------------------------
            <div id="contenidoLightbox" class="fadebox">
                <div id="arcoiris" class="arcoiris">
                    <div>
                        <img id="imagenGrande"/>

                        <div id="flechas">
                            <div>
                                <a id="flechaAtras" class="flechaAtras" data-ruta_imgg="" data-title="" alt="Retroceder" title="Retroceder"></a>
                            </div>
                            <div>
                                <a id="flechaAdelante" class="flechaAdelante" data-ruta_imgg="" data-title="" alt="Avanzar" title="Avanzar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="tituloDescripcion">
                        <p>Título</p>
                        <div class="Cerrar"><a class="CerrarLightbox">X</a></div>
                    </div>
                </div>
            </div>
        </div>
 
 <img src="https://github.com/SA-full-stack-developer/colllumn_gallery_with_colored_lightbox/blob/master/images/2017-02-07_174306.png"/>

# lightboxPropio.php

Lo que hace es redistribuir un array de elementos en columnas. Si quitamos los comentarios y lo preparamos con muy pocas moficiaciones, podemos leer una carpeta y asignar al array la ruta de todas las imágenes dentro de la carpeta. De esta forma y con unos ajustes del CSS podemos tener una galería de imágenes vertical aprovechando todo el espacio de la web.

    function leerDirectorio(/*$ruta*/){
        /*$directorio = scandir($ruta);*/
        $rutasImagenes = Array(
            'https://images.pexels.com/photos/26279/pexels-photo-26279.jpg?w=1260&h=750&auto=compress&cs=tinysrgb', 
            'https://images.pexels.com/photos/126285/pexels-photo-126285.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/230128/pexels-photo-230128.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/248371/pexels-photo-248371.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/167085/pexels-photo-167085.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/230784/pexels-photo-230784.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/26279/pexels-photo-26279.jpg?w=1260&h=750&auto=compress&cs=tinysrgb', 
            'https://images.pexels.com/photos/126285/pexels-photo-126285.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/230128/pexels-photo-230128.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/248371/pexels-photo-248371.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/167085/pexels-photo-167085.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb',
            'https://images.pexels.com/photos/230784/pexels-photo-230784.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb'
        );
        $rutaMini = "";
        $titulos = Array('titulo 1', 'titulo 2', 'titulo 3', 'titulo 4', 'titulo 5', 'titulo 6', 'titulo 7', 'titulo 8', 'titulo 9', 'titulo 10', 'titulo 11', 'titulo 12');
        $contador = 0;
            $contador2 = 0;
        /*$rutaImagenGrande = str_replace("/thumbs/","/",$ruta);*/
        /*$file = fopen($rutaImagenGrande."archivos/nombres.txt", "r");*/

            $columna1 = "<div class='columna'>";
            $columna2 = "<div class='columna'>";
            $columna3 = "<div class='columna'>";
            $columna4 = "<div class='columna'>";

        /*while(!feof($file)) {
          array_push($titulos, fgets($file));
        }*/

        /*fclose($file);*/		

        for($x = 0; $x < count($rutasImagenes); ++$x) {
                $rutaMini = $rutasImagenes[$x];

                switch($contador2){
                    case 0:
                        $columna1 = $columna1."<a data-ruta_imgg='".$rutaMini."' data-title='".utf8_encode($titulos[$contador])."' class='Light' title='".utf8_encode($titulos[$contador])."'><img src='".$rutaMini."' alt='".utf8_encode($titulos[$contador])."' title='".utf8_encode($titulos[$contador])."'/></a>";
                        $contador2++;
                    break;
                    case 1:
                        $columna2 = $columna2."<a data-ruta_imgg='".$rutaMini."' data-title='".utf8_encode($titulos[$contador])."' class='Light' title='".utf8_encode($titulos[$contador])."'><img src='".$rutaMini."' alt='".utf8_encode($titulos[$contador])."' title='".utf8_encode($titulos[$contador])."'/></a>";
                        $contador2++;
                    break;
                    case 2:
                        $columna3 = $columna3."<a data-ruta_imgg='".$rutaMini."' data-title='".utf8_encode($titulos[$contador])."' class='Light' title='".utf8_encode($titulos[$contador])."'><img src='".$rutaMini."' alt='".utf8_encode($titulos[$contador])."' title='".utf8_encode($titulos[$contador])."'/></a>";
                        $contador2++;
                break;
                case 3:
                    $columna4 = $columna4."<a data-ruta_imgg='".$rutaMini."' data-title='".utf8_encode($titulos[$contador])."' class='Light' title='".utf8_encode($titulos[$contador])."'><img src='".$rutaMini."' alt='".utf8_encode($titulos[$contador])."' title='".utf8_encode($titulos[$contador])."'/></a>";
                    $contador2 = 0;
                break;
            }
            
			$contador++;
        }
                
        $columna1 = $columna1."</div>";
        $columna2 = $columna2."</div>";
        $columna3 = $columna3."</div>";
        $columna4 = $columna4."</div>";
                
        echo $columna1.$columna2.$columna3.$columna4;
	}

# lightboxPropio.css

Aquí le damos algunos estilos básicos. A destacar la clase arcoiris.

        .arcoiris{
            background: -webkit-linear-gradient(135deg, rgba(255, 0, 0, 0.8), rgba(255, 136, 0, 0.8), rgba(255, 255, 0, 0.8), rgba(0, 255, 0, 0.8), rgba(0, 0, 255, 0.8), rgba(102, 0, 255, 0.8), rgba(204, 0, 255, 0.8));
            background: -moz-linear-gradient(135deg, rgba(255, 0, 0, 0.8), rgba(255, 136, 0, 0.8), rgba(255, 255, 0, 0.8), rgba(0, 255, 0, 0.8), rgba(0, 0, 255, 0.8), rgba(102, 0, 255, 0.8), rgba(204, 0, 255, 0.8));
            background: -o-linear-gradient(135deg, rgba(255, 0, 0, 0.8), rgba(255, 136, 0, 0.8), rgba(255, 255, 0, 0.8), rgba(0, 255, 0, 0.8), rgba(0, 0, 255, 0.8), rgba(102, 0, 255, 0.8), rgba(204, 0, 255, 0.8));
            background: linear-gradient(135deg, rgba(255, 0, 0, 0.8), rgba(255, 136, 0, 0.8), rgba(255, 255, 0, 0.8), rgba(0, 255, 0, 0.8), rgba(0, 0, 255, 0.8), rgba(102, 0, 255, 0.8), rgba(204, 0, 255, 0.8));
            height: auto;
            padding: 10px;
            border-radius: 10px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }

# lightboxPropio.js

El script recoge los atributos del enlace de la imagen clicada y carga esa imagen, aparte coge los atributos de la siguiente imagen y de la anterior y asigna estos elementos a las flechas. Al igual con el título.

--------------------------- Muestra la imagen asignada a las flechas o a la clicada --------------------------

	$('.Light, .flechaAdelante, .flechaAtras').click(function() {
        	mostrarImagen(this);
    	});
	
------------------------------------------ Cierra el Lightbox ------------------------------------------------

    $(".CerrarLightbox").click(function(){
        var imagenGrande = document.getElementById('imagenGrande');
        
        $('#contenidoLightbox').fadeOut('slow',function(){
            imagenGrande.setAttribute("src", "");
            return false;
        });
    });
    
------------------------------------------- Muestra el Ligthbox ----------------------------------------------

    function mostrarLightBox(){
        $('#contenidoLightbox').fadeIn('slow');
        return false;
    }
    
-- Función más importante, es la que se encarga de cargar los siguientes elementos para pasar de uno a otro --
    
    function mostrarImagen(e){
	var imagenGrande = document.getElementById('imagenGrande');
        var contenedorEnlaces = document.getElementsByClassName("columna");
        var flechaAd = document.getElementById("flechaAdelante");
        var flechaAt = document.getElementById("flechaAtras");
        var enlaces = Array();
        var enlacesAuxiliares;
        var indiceAux;
        var actual;
        var anterior;
        var siguiente;
        var rutaImgGAc;
        var rutaImgGAn;
        var rutaImgGAd;
        var titleImgGAc;
        var titleImgGAn;
        var titleImgGAd;
        
        for (var x=0; x < contenedorEnlaces.length; x++){
            enlacesAuxiliares = contenedorEnlaces[x].getElementsByTagName("a");
            
            for(var y = 0; y < enlacesAuxiliares.length; y++){
                enlaces.push(enlacesAuxiliares[y]);
            }
        }
        
        actual = e;
        rutaImgGAc = actual.getAttribute("data-ruta_imgg");
        titleImgGAc = actual.getAttribute("data-title");
        
        $('#contenidoLightbox').fadeOut('slow',function(){
            imagenGrande.setAttribute("src", rutaImgGAc);
            $('#contenidoLightbox').fadeIn('slow');
            return false;
        });
        $(".tituloDescripcion p").text("").slideToggle("slow");
        $(".tituloDescripcion p").text(titleImgGAc).slideToggle("slow");
        
        for(var x = 0; x < enlaces.length; x++){
            if(enlaces[x].getAttribute("data-title") === e.getAttribute("data-title")){
                switch(this.className){
                    case "flechaAtras":
                        indiceAux = x - 1;
                    break;
                    case "flechaAdelante":
                        indiceAux = x + 1;
                    break;
                    default:
                        indiceAux = x;
                    break;
                }
                
                if(indiceAux > 0){
                    anterior = enlaces[indiceAux - 1];
                }else{
                    anterior = enlaces[enlaces.length - 1];
                }
                
                if(indiceAux < (enlaces.length - 1)){
                    siguiente = enlaces[indiceAux + 1];
                }else{
                    siguiente = enlaces[0];
                }
                
                x = enlaces.length;
            }
        }
        
        rutaImgGAn = anterior.getAttribute("data-ruta_imgg");
        rutaImgGAd = siguiente.getAttribute("data-ruta_imgg");
        titleImgGAn = anterior.getAttribute("data-title");
        titleImgGAd = siguiente.getAttribute("data-title");
        flechaAd.setAttribute("data-ruta_imgg", rutaImgGAd);
        flechaAd.setAttribute("data-title", titleImgGAd);
        flechaAt.setAttribute("data-ruta_imgg", rutaImgGAn);
        flechaAt.setAttribute("data-title", titleImgGAn);
    }

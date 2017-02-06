<html>
	<head>
		<title>Gallery with colored Lightbox</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/galeria.css" />
		<link rel="stylesheet" href="css/lightboxPropio.css" />
		<?php
	            include "php/lightboxPropio.php";
		?>
    </head>
    <body >
        <div class="contenedor">
            <div class="Gallery">
                <?php
                    leerDirectorio(/*"../images/galeria/thumbs/"*/);
                ?>
            </div>

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
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/lightboxPropio.js"></script>
    </body>
</html>
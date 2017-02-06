<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
<?php
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
?>
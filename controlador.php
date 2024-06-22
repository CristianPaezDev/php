<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['genero']) && !empty($_GET['edad'])) {

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $genero = $_GET['genero'];
        $edad = $_GET['edad'];


        require_once("aprendiz.php");


        $aprendiz = new Aprendiz();
        

        $aprendiz->setNombre($nombre);
        $aprendiz->setApellido($apellido);
        $aprendiz->setGenero($genero);
        $aprendiz->setEdad($edad);

        $aprendiz->Guardar();
        
    } else {
        
        echo "No se han proporcionado todos los datos o algunos campos están vacíos.";
    }

} else {
    
    echo "Error en el método de envío de datos.";
}

?>


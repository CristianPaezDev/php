<?php
require_once("../clases/aprendiz.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // print_r("<pre>");
    // print_r($_POST);
    // print_r("</pre>");

    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['genero']) && !empty($_POST['edad'])) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero = $_POST['genero'];
        $edad = $_POST['edad'];


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

<?php
require __DIR__ . "/../clases/aprendiz.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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
        header("location: ../index.php");
        
    } else {
        
        echo "No se han proporcionado todos los datos o algunos campos están vacíos.";
    }

} else {
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo"Eliminado";
    $id = $_GET['txtId'];
    $aprendiz = new Aprendiz();
    $aprendiz->setId($id);
    $aprendiz->Eliminar();
    header("location: ../index.php");
}   
}


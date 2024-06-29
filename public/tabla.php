<?php
require __DIR__ . '/../clases/aprendiz.php';

$aprendiz = new Aprendiz();

$persona = $aprendiz->Listar();

// var_dump($persona);
?>

<table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>genero</th>
        <th>Edad</th>
        <th></th>
    </thead>
    <tbody>
        <?php
        foreach($persona as $key => $value){
        ?>
            <tr>
                <td>
                    <?php echo $value ["id"]; ?>
                </td>
                <td>
                    <?php echo $value ["nombre"]; ?>
                </td>
                <td>
                    <?php echo $value ["apellido"]; ?>
                </td>
                <td>
                    <?php echo $value ["genero"]; ?>
                </td>
                <td>
                    <?php echo $value ["edad"]; ?>
                </td>
                <td>
                    <form action="controladores/controlador.php" method="GET">
                        <input type="hidden" value="<?php echo $value["id"]?>" name="txtId">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
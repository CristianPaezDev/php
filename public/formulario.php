
<form action="controladores/controlador.php" method="POST">
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre">
    </div>
    <div>
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido">
    </div>
    <div>
      <p>Género</p>
      <label for="masculino">Masculino:</label>
      <input type="radio" id="masculino" name="genero" value="masculino">
      <label for="femenino">Femenino:</label>
      <input type="radio" id="femenino" name="genero" value="femenino">
    </div>
    <div>
      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad">
    </div>
    <button type="submit">Enviar</button>    
  </form>
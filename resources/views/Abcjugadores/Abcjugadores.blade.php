<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Afiliación</title>
    <style type="text/css">
        form {
            display: grid;
            grid-template-columns: 150px 1fr;
            grid-row-gap: 10px;
            margin: 20px;
        }

        label {
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <h1>Formulario de Afiliación</h1>
    <form method="post" action="procesar.php">
        <label for="idAfiliacion">ID de Afiliación:</label>
        <input type="text" name="idAfiliacion" id="idAfiliacion" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>

        <label for="curp">CURP:</label>
        <input type="text" name="curp" id="curp" required>

        <label for="posicion">Posición:</label>
        <select name="posicion" id="posicion" required>
            <option value="">Seleccione una opción</option>
            <option value="Delantero">Delantero</option>
            <option value="Mediocampista">Mediocampista</option>
            <option value="Defensa">Defensa</option>
            <option value="Portero">Portero</option>
        </select>

        <label for="golpea">Pie Dominante:</label>
        <select name="golpea" id="golpea" required>
            <option value="">Seleccione una opción</option>
            <option value="Derecho">Derecho</option>
            <option value="Izquierdo">Izquierdo</option>
            <option value="Ambidiestro">Ambidiestro</option>
        </select>

        <label for="tira">Lateralidad:</label>
        <select name="tira" id="tira" required>
            <option value="">Seleccione una opción</option>
            <option value="Derecho">Derecho</option>
            <option value="Izquierdo">Izquierdo</option>
        </select>

        <label for="pagina">Página Web:</label>
        <input type="url" name="pagina" id="pagina">

        <label for="abreviacion">Abreviación:</label>
        <input type="text" name="abreviacion" id="abreviacion">

        <label for="status">Estatus:</label>
        <select name="status" id="status" required>
            <option value="">Seleccione una opción</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>

        <label for="rama">Rama:</label>
        <input type="text" name="rama" id="rama" required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
```

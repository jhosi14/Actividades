<?php
if (isset($_POST['bandera'])) {
    $data = [
        'nombre' => $_POST['nombre'] ?? "",
        'apellido' => $_POST['apellido'] ?? "",
        'correo' => $_POST['correo'] ?? "",
        'comentario' => $_POST['comentario'] ?? "",
        'idioma' => $_POST['idioma'] ?? "",
        'musica' => $_POST['musica'] ?? "",
        'pasatiempo' => $_POST['pasatiempo'] ?? []
    ];

    $errors = []; 
    $swith = true; 

    
    foreach ($data as $key => $value) {
        if (empty($value) && $key !== 'pasatiempo') {
            $errors[$key] = "El campo $key es obligatorio.";
            $swith = false;
        }
    }

    if (empty($data['pasatiempo'])) {
        $errors['pasatiempo'] = "Debes seleccionar al menos un pasatiempo.";
        $swith = false;
    }

   
    if (!empty($data['comentario']) && (strlen($data['comentario']) < 5 || strlen($data['comentario']) > 49)) {
        $errors['comentario'] = "El comentario debe tener entre 5 y 49 caracteres.";
        $swith = false;
    }

    
    if (!empty($data['nombre']) && (strlen($data['nombre']) < 3 || strlen($data['nombre']) > 20)) {
        $errors['nombre'] = "El nombre debe tener entre 3 y 20 caracteres.";
        $swith = false;
    }

    
    if (!empty($data['apellido']) && (strlen($data['apellido']) < 3 || strlen($data['apellido']) > 20)) {
        $errors['apellido'] = "El apellido debe tener entre 3 y 20 caracteres.";
        $swith = false;
    }

    
    $comentariosProhibidos = ['*', '@', '.', '/'];
    foreach ($comentariosProhibidos as $simbolo) {
        if (strpos($data['comentario'], $simbolo) !== false) {
            $errors['comentario'] = "El comentario no es válido, tiene símbolos no permitidos.";
            $swith = false;
            break;
        }
    }

    



    
    
    if($swith) {
        
        echo "El nombre es: " . $data['nombre'] . "<br>";
        echo "El apellido es: " . $data['apellido'] . "<br>";
        echo "El correo es: " . $data['correo'] . "<br>";
        echo "El comentario es: " . $data['comentario'] . "<br>";
        echo "El idioma es: " . $data['idioma'] . "<br>";
        echo "La música es: " . $data['musica'] . "<br>";

        $pasatiempo = $data['pasatiempo'];
        foreach ($pasatiempo as $hobby) {
            echo " - " . $hobby . "<br>";
        }
    }
}
?>


<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    form {
        max-width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    div {
        margin-bottom: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="radio"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="text"].error,
    input[type="email"].error,
    select.error {
        border-color: red; /* Borde rojo si hay error */
        
    }

    .error {
        color: red;
        margin-top: 5px;
    }
</style>





<form action="" method="post">
    <div>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" class=<?php echo (isset($errors['nombre']))?"error":""?>>
        <?php if (isset($errors['nombre'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['nombre']; ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" class=<?php echo (isset($errors['apellido']))?"error":""?>>
        <?php if (isset($errors['apellido'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['apellido']; ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label for="correo">Correo: </label>
        <input type="email" name="correo" class=<?php echo (isset($errors['correo']))?"error":""?>>
        <?php if (isset($errors['correo'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['correo']; ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label for="comentario">Comentario: </label>
        <input type="text" name="comentario" class=<?php echo (isset($errors['comentario']))?"error":""?>>
        <?php if (isset($errors['comentario'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['comentario']; ?></p>
        <?php endif; ?>
    </div>

    <br>

    <div>
        <label for="idioma">IDIOMAS: </label>
        <select name="idioma" class=<?php echo (isset($errors['idioma']))?"error":""?>>
            <option value="" >Selecciona un idioma</option>
            <option value="ingles">Inglés</option>
            <option value="español">Español</option>
            <option value="portugues">Portugués</option>
            <option value="frances">Francés</option>
            <option value="italiano">Italiano</option>
        </select>
        <?php if (isset($errors['idioma'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['idioma']; ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label>MÚSICA: </label>
        <div class=<?php echo (isset($errors['idioma']))?"error":""?>>
            <?php
            $musica=[
                'Rock',
                'Pop',
                'clasico',
                'tradicional'
            ];
            foreach ($musica as $key => $value) {
                echo "<input type='radio' name='musica' value='$value' > $value";
            }
            ?>
        </div>
        
    </div>

    <div>
        <label>Pasatiempo: </label>
        <?php

        $pasatiempo = [
            'deportes',
            'lectura',
            'videojuegos'
        ];

            foreach ($pasatiempo as $index => $hobby) {
                echo "<input type='checkbox' name='pasatiempo[]' value='$hobby' > $hobby<br>";
            }
            ?>
        <?php if (isset($errors['pasatiempo'])): ?>
            <p class="error" style="color:red;"><?php echo $errors['pasatiempo']; ?></p>
        <?php endif; ?>
        </div>
        
    </div>


    <div>
        <input type="hidden" name="bandera" value="1">
        <input type="submit" value="Enviar">
    </div>
</form>
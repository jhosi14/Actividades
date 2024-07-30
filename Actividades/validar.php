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

    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red'>{$error}</p>";
        }
    } else {
        
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

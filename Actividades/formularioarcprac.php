<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Expediente</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }
    .form-container {
        width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label {
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="file"],
    input[type="submit"] {
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .file-info {
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }
</style>
</head>
<body>
    <div class="form-container">
        <h2>Subir Archivo</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="archivo">Selecciona un archivo PNG (máx. 2MB):</label>
            <input type="file" name="archivo" id="archivo" accept=".png" required>
            <label for="expediente">Selecciona un archivo PDF (máx. 10MB):</label>
            <input type="file" name="expediente" id="expediente" accept=".pdf" required>
            <input type="hidden" value="1" name="bandera">
            <input type="submit" value="Subir Archivos" name="submit">
        </form>
        <div class="file-info">
        <?php
            if(isset($_POST['bandera'])){
                $nombre = $_POST['nombre'];
                
                $archivoPNG = $_FILES['archivo']['name'];
                $tipoPNG = $_FILES['archivo']['type'];
                $tamañoPNG = $_FILES['archivo']['size'] / 1024 / 1024; 
                
                $archivoPDF = $_FILES['expediente']['name'];
                $tipoPDF = $_FILES['expediente']['type'];
                $tamañoPDF = $_FILES['expediente']['size'] / 1024 / 1024; 
                
                if ($tipoPNG !== 'image/png' || $tipoPDF !== 'application/pdf') {
                    echo "Por favor selecciona un archivo PNG y un archivo PDF.";
                } elseif ($tamañoPNG > 2 || $tamañoPDF > 10) { 
                    echo "Asegúrate de que el tamaño de los archivos no exceda el límite.";
                } else {
                    echo "<br><strong>Información del archivo PNG:</strong><br>";
                    echo "Nombre de archivo: " . $archivoPNG . "<br>";
                    echo "Tipo: " . $tipoPNG . "<br>";
                    echo "Tamaño: " . $tamañoPNG . " MB<br>";
                    echo "Nombre temporal: " . $_FILES['archivo']['tmp_name'] . "<br>";
                    echo "Error: " . $_FILES['archivo']['error'];
                    
                    echo "<br><strong>Información del archivo PDF:</strong><br>";
                    echo "Nombre de archivo: " . $archivoPDF . "<br>";
                    echo "Tipo: " . $tipoPDF . "<br>";
                    echo "Tamaño: " . $tamañoPDF . " MB<br>";
                    echo "Nombre temporal: " . $_FILES['expediente']['tmp_name'] . "<br>";
                    echo "Error: " . $_FILES['expediente']['error'];
                }
            }
        ?>
        </div>
    </div>
</body>
</html>
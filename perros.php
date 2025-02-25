<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Perros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .perro {
            border: 2px solid #ccc;
            border-radius: 10px;
            margin: 10px;
            overflow: hidden;
            width: 250px;
        }
        .perro img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #ccc;
        }
        .boton {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .boton:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Galería de Perros</h1>
    <div class="galeria">
        <?php
            function obtenerImagenPerro() {
                $url = "https://dog.ceo/api/breeds/image/random";
                $response = file_get_contents($url);
                $data = json_decode($response, true);
                return $data["message"];
            }

            // Mostrar 6 imágenes de perros
            for ($i = 0; $i < 6; $i++) {
                $imagen = obtenerImagenPerro();
                echo '
                    <div class="perro">
                        <img src="'.$imagen.'" alt="Imagen de perro">
                    </div>
                ';
            }
        ?>
    </div>
    <a href="perros.php" class="boton">Actualizar Imágenes</a>
</body>
</html>

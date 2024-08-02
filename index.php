<?php
// Api
const Api_url = "https://www.whenisthenextmcufilm.com/api";

// Inicializar una nueva sesión de cURL
$ch = curl_init(Api_url);

// Establecer una opción para una transferencia cURL 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición HTTP
$result = curl_exec($ch);

// Decodificar un string de JSON
$data = json_decode($result, true);

// Cerrar una sesión cURL
curl_close($ch);

?>

<head>
    <title>La próxima película de Marvel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="La próxima película de Marvel">
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>

    <hr>

    <h1><?= $data["title"] ?></h1>

    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" style='border-radius: 10px;'>
    </section>

    <hgroup>
        <p><?= $data["release_date"] ?></p>
        <p><?= $data["days_until"] ?> días para el estreno</p>
        <p><?= $data["overview"] ?></p>
    </hgroup>

    <hr>

    <br>

    <h1><?= $data["following_production"]["title"] ?></h1>

    <section>
        <img src="<?= $data["following_production"]["poster_url"] ?>" width="300" style='border-radius: 10px;'>
    </section>

    <hgroup>
        
        <p><?= $data["following_production"]["release_date"] ?></p>
        <p><?= $data["following_production"]["days_until"] ?> días para el estreno</p>
        <p><?= $data["following_production"]["overview"] ?></p>
    </hgroup>

    <pre style="overflow: scroll; height: 50vh;">
        <?php var_dump($data); ?>
    </pre>

</main>

<style>
    hgroup, section, h1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 0 20rem;
    }

    img {
        margin: 1rem;
    }

    pre {
        margin: 1rem;
    }

</style>
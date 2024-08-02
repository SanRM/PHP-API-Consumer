<?php

$name = "Santiago";

$output = "Hola " . $name;

echo gettype($output);

define('Logo', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

const secondName = "Juan";

$namesArray = ["Santiago", "Juan", "Pedro"];

$namesArray[] = "Maria";

?>

<h1>

    <img src="<?= Logo ?>" width="100">
    <br><br>
    <?= $output ?>

    <br>

    <?= secondName ?>

</h1>


<h1>
    Operador Match:

    <br>

    <?php

    $age = 5;

    $outputAge = match (true) {
        $age < 2 => "Eres un bebe 🍼",
        $age < 12 => "Eres un niño 👦",
        $age < 18 => "Eres un adolescente 👨‍🎓",
        $age < 65 => "Eres un adulto 👨",
        default => "Eres un adulto mayor 👴",
    };

    echo $outputAge;

    ?>
</h1>

<ul>

    <?php foreach ($namesArray as $key => $names) : ?>
        <li><?= $key . ". " .  $names ?></li>
    <?php endforeach; ?>

</ul>
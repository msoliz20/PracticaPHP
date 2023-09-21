<!DOCTYPE html>
<html>
<head>
    <title>PRACTICA 1</title>
</head>
<body>

    <h1>
        Descrivint a Kurt Cagle
    </h1>
    <h2>
        Les dades de Kurt son:
    </h2>
    <?php
    // Definició de les variables amb la informació de la persona
    $nom = "Kurt";
    $cognoms = "Cagle";
    $edat = 40;
    $fecha = date_create();
    date_date_set($fecha, 2001, 2, 3);
    $telefons = array("654332211", "933332211");
    $adreca = "Carrer de Turin, 15";
    $email = "kurt.cagle@example.com";
    $treballa = true;
    $alcada = 1.67;



    // Mostra la informació en una llista HTML
    echo "<ul>";
    echo "<li>Es diu $nom</li>";
    echo "<li>Te $edat anys</li>";
    echo "<li>Va neixer l'any: " . date_format($fecha, 'Y-m-d') . "</li>";
    echo "<li>El seus telèfons són: " . $telefons[0] . " - " . $telefons[1] . "</li>";
    echo "<li>El seus telèfons són:";
    echo "<li>Viu a: $adreca</li>";
    echo "<li>El seu email és: $email</li>";
    echo "<li> treballa: " . ($treballa ? 'Si' : 'No') . "</li>";
    echo "<li>I medeix: $alcada</li>";
    echo "</ul>";
    ?>
</body>
</html>

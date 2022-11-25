<!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
<!-- Aggiungete Bootstrap e mostrate le informazioni con una tabella. -->
<!-- Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio. -->
<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$request_parking = $_GET["parking"] ?? "";
$hotel_park = [];

if ($request_parking === "si") {
    // echo $hotel_park;
} else {
    echo "sbagliato";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>
    <main>
        <!-- Filtro parcheggio -->
        <form action="index.php" method="GET">
            <label for="parking"></label>
            <input type="text" name="parking" id="parking">
            <button type="request-parking">Parcheggio</button>
        </form>
        <!-- /Filtro parcheggio -->
        <!-- Tabella -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza Hotel dal centro</th>
                </tr>
            </thead>

            <?php

            ?>
            <tbody>
                <?php foreach ($hotels as $key => $value) { ?>
                    <tr>
                        <?php for ($i = 0; $i < 1; $i++) { ?>
                            <td> <?php echo $hotels[$key]['name'] . "<br />"; ?> </td>
                            <td><?php echo $hotels[$key]['description'] . "<br />"; ?></td>
                            <td>
                                <?php if ($hotels[$key]['parking'] === true) {
                                    echo "si";
                                    $hotel_park[] = $hotels[$key]['name'];
                                    // var_dump($hotel_park);
                                } else {
                                    echo "no";
                                } ?>
                            </td>
                            <td><?php echo $hotels[$key]['vote'] . "<br />"; ?></td>
                            <td><?php echo $hotels[$key]['distance_to_center'] . "<br />"; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- / Tabella -->
    </main>
</body>

</html>
<!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
<!-- Aggiungete Bootstrap e mostrate le informazioni con una tabella. -->
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

    // foreach ($hotels as $key => $value) {
    //     echo $hotels[$key]['name'];
    //     echo $hotels[$key]['description'];
    //     echo $hotels[$key]['parking'];
    //     echo $hotels[$key]['vote'];
    //     echo $hotels[$key]['distance_to_center'];
    //     echo "<br />";
    // }

];
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
                            <td><?php echo $hotels[$key]['parking'] . "<br />"; ?></td>
                            <td><?php echo $hotels[$key]['vote'] . "<br />"; ?></td>
                            <td><?php echo $hotels[$key]['distance_to_center'] . "<br />"; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </main>
</body>

</html>
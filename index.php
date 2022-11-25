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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <main>
        <div class="container">
        <!-- stampare in pagina gli $hotels -->
            <?php
            for($i=0; $i<count($hotels); $i++) {
                $curr_hotel = $hotels[$i];
                //var_dump($curr_hotel);
            ?>
            <ul>
                <li>
                    <h2> <?php echo $curr_hotel["name"] ?> </h2>
                    <p> <?php echo $curr_hotel["description"] ?> </p>
                    <p> <?php echo $curr_hotel["parking"] ?> </p>
                    <p> <?php echo $curr_hotel["vote"] ?> </p>
                    <p> <?php echo $curr_hotel["distance_to_center"] ?> </p>
                </li>
            </ul>
            <?php } ?>
        </div>
    </main>
</body>
</html>
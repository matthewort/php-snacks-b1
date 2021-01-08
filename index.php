<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "data.php";
        // var_dump($hotels);
       ?> 
</head> 
<body>
<div class="container">
    <?php
        for($x=0; $x<count($hotels); $x++) { //creo un ciclo
            $hotel = $hotels[$x]; //ci creiamo la variabile $hotel che corrisponderà ad ogni singolo hotel in $hotels
            ?>
                <li>
                    <?php echo $hotel['name'];?> <br> <!-- mi butto giù i name di ogni elemento di $hotels -->
                    <?php echo $hotel['description'];?> <br>
                    <?php echo $hotel['parking'];?> <br>
                    <?php echo $hotel['vote'];?> <br>
                    <?php echo $hotel['distance_to_center'];?>
                </li>
            <?php
        }  
    ?>
</div>
    
</body>
</html>
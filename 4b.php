<?php 

    $hardwares = ['Motherboard', 'Processor', 'Hard Disk', 'PC Cooler', 'VGA Card', 'SSD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    
    <h4>Macam-macam perangkat keras komputer</h4>

    <ol>

        <?php 
        
            for ($i = 0; $i < count($hardwares); $i++) {



            
        
        ?>
        <li><?= $hardwares[$i]; ?></li>
        <?php 
        
            }
        
        ?>

    </ol>

    <br>
    <br>

    <?php 
    
        array_push($hardwares, 'Card Reader', 'Modem');
        sort($hardwares);
    
    ?>

    <h4>Macam-macam perangkat keras komputer baru</h4>

    <ol>

        <?php 
        
            for ($i = 0; $i < count($hardwares); $i++) {



            
        
        ?>
        <li><?= $hardwares[$i]; ?></li>
        <?php 
        
            }
        
        ?>

    </ol>

</body>
</html>
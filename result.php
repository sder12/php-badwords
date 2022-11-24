<?php
    $myparagraph = $_GET["paragraph"];
    $mybadword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    
        <section>
           
        <h3>
            <?php echo $myparagraph; ?>
        </h3>

        <h3>
            <?php echo $mybadword; ?>
        </h3>

       
        <!-- back to index -->
        <hr>
        <a href="index.php"> back to homepage</a>
        
        </section>

    </div>
</body>
</html>
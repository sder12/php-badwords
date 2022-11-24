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
            <h3> Text without censure: </h3>       
            <p> <?php echo $myparagraph; ?> </p>
            <h4> Paragraph's length: <?php echo strlen($myparagraph); ?> </h4>   
            <h4> Censored word: <?php echo $mybadword; ?> </h4>      
        </section>
        <hr>

        <section>        
            <h3> Censored text: </h3>      
            <p> <?php echo str_replace($mybadword, "***", $myparagraph) ?> </p>           
        </section>

        <hr>
        
        <section>      
            <a href="index.php"> back to homepage</a>
        </section>  

    </div>
</body>
</html>
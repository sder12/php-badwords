<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

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
        <!-- TITLE -->
        <section class="title">
            <h1>FORM PHP</h1>
            <span>
                <?php echo "php debug subtitle"?>
            </span>
           
        </section>

        <!-- FORM -->
        <section class="form">
            <form action="result.php" method="GET">
                <hr>
                <!-- PARAGRAPH -->
                <label for="paragraph">Write some text</label>    
                <input type="text" id="paragraph" name="paragraph">     

                <hr>     

                <!-- BADWORD -->
                <label for="badword">Type your badword</label>
                <input type="text" id="badword" name="badword">

                <!-- BUTTON -->
                <hr>
                <button type="submit">Submit</button>
            </form>
        </section>

    </div>
</body>
</html>
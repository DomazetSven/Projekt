<?php
$informacija=json_decode(file_get_contents('info.json'), true);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HTML & CSS">
    <meta name="description" content="Kontakt stranica za projekt">
    <meta name="author" content="Sven Domazet 0246083383">
    <link rel="stylesheet" href="kontaktstil.css">
</head>
<body>
    <header>
        <img src="images/lokot.png" alt="">
        <h1>Lock Me Up!</h1>  
        <a href="kontakt.php">Kontakt</a>
        <a href="igre.php">Igre</a> 
        <a href="naslovnica.html">Naslovnica</a>
    </header>

    <article>
        <h2>Kontakt</h2>
        <?php foreach($informacija as $inform) { ?>
        <div class="kontakt">
            <h3>Broj mobitela:</h3>
            <h4><?php echo $inform['telefon']; ?></h4>
            <h3>Mail:</h3>
            <h4><?php echo $inform['mail']; ?></h4>
            <h3>Radno vrijeme:</h3>
            <h4><?php echo $inform['rad']; ?></h4>
            <?php } ?>
        </div>

        <div>
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=ulica%20kneza%20borne%2012+(ClueGo%20Escape%20Room)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0"></iframe>
        </div>

    <footer>
        <h2>Sven Domazet 0246083383</h2>
    </footer>
    </article>
</body>
</html>
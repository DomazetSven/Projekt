<?php
$lista=json_decode(file_get_contents('popis.json'), true);
?>

<!--  http://localhost/aplikacija/Projekt/igre.php  -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="HTML & CSS">
    <meta name="description" content="Igre stranica za projekt">
    <meta name="author" content="Sven Domazet 0246083383">
    <link rel="stylesheet" href="igrestil.css">
</head>
<body>
    <header>
        <img src="images/lokot.png" alt="">
        <h1>Lock Me Up!</h1>
        <a href="kontakt.php">Kontakt</a>
        <a href="igre.php">Igre</a> 
        <a href="naslovnica.html">Naslovnica</a>
    </header>

<div class="istrazi">
        <?php foreach($lista as $escape){ ?>
            <h3><?php echo $escape['naziv']; ?></h3>
            <p>Lokacija: <?php echo $escape['adresa']; ?></p>
            <ul>
                <?php foreach($escape['avanture'] as $key => $avantura){ ?>
                    <li>
                        <p>Naziv igre: </p><h4><?php echo $avantura['ime']; ?></h4><br>
                        <p>Trajanje igre (u min): </p><h4><?php echo $avantura['trajanje']; ?></h4><br>
                        <p>Razina zahtjevnosti (od 10): </p><h4><?php echo $avantura['dif']; ?></h4><br>
                        <p>Razina straha: </p><h4><?php echo $avantura['strah']; ?></h4>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
</div>
    <footer>
        <h2>Sven Domazet 0246083383</h2>
    </footer>
</body>
</html>
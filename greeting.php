<?php
$testo = $_GET["testo"];
$badword = $_GET["badword"];
$new_text = str_replace("$badword","***",$testo);
$length_testo = strlen($testo);
$length_newtext = strlen($new_text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Correct text</h1>
    <h2>Qui ce il tuo testo</h2>
    <p><?php echo $testo; ?></p>

    <h3>Lunghezza del paragrafo = <?php echo $length_testo;?> </h3>
    <h2>Qui ce la tua badword</h2>
    <p><?php echo $badword; ?></p>

    <h2>Qui ce il tuo testo corretto</h2>
    <p><?php echo $new_text;?></p>
    <h3>Lunghezza del paragrafo = <?php echo $length_newtext;?></h3>


    <a href="index.php">clicca qui per tornare alla pagina precedente</a>
</body>
</html>
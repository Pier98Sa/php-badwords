<?php
    //acquisisco la parola vietata tramite la GET
    $parolaVietata = $_GET['parolaVietata'];

    // testo 
    $testo = "Vincere non è importante ... è l'unica cosa che conta. Non importa se vinci di un chilometro o di un centimetro... l'importante è vincere ..";

    //testo filtrato
    $testoFiltrato= str_Ireplace($parolaVietata, '***',$testo);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1>Testo</h1>
    <p><?php echo $testo; ?></p>
    <p>il testo ha: <?php echo strlen($testo); ?> caratteri</p>

    <h1>Testo filtrato</h1>
    <p><?php echo $testoFiltrato; ?></p>
    <p>il testo filtrato ha: <?php echo strlen($testoFiltrato); ?> caratteri</p>
</body>
</html>
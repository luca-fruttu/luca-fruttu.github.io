<html>
    <head>
        <title> Visualizzazione dati personali </title>
    </head>
    
    <body>
    
    <?php
        
        $nome = $_POST ["Nome"];
        $cognome = $_POST ["Cognome"];
        $sesso = $_POST ["Sesso"];
        $cibo = $_POST ["Cibo"];
        $citazione = $_POST ["Citazione"];
        $istruzione = $_POST ["Istruzione"];
        
        echo "Ciao, $nome, $cognome <br>";
        
        echo "Sei, $sesso e ti piace mangiare: <br>";
        foreach ($cibo as $c)
            {
                echo "$c <br>";
            }
            
        echo "<br> La tua citazione preferita è: <br>";
        echo "<em>$citazione</em> <br> <br>";
        
    ?>
    
    </body>
</html>
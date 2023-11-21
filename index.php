<?php
$text = 'Il sole sorge all\'orizzonte, il suo bagliore dorato si diffonde, abbracciando la terra. Il sole dipinge il cielo, il suo calore avvolge ogni angolo. Guardo il sole brillare, il sole che splende alto nel cielo azzurro. Il sole illumina il mondo, il suo potere nutre la vita. Il sole è luce, è energia, è fonte di speranza. Il sole è il centro, il centro di questo universo, il sole che continua a risplendere, risplendere con una bellezza senza tempo';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>PHP Badwords</title>
</head>
<body>   

    <div>
        <h1>Devi censurare una parola da questo testo</h1>
        <p><?php echo $text ?></p>
        <h1>Inserisci la parola da censurare</h1>
        <form action="text.php" method='POST'>            
            <input type="text" name="user_text" placeholder="Scrivi la parola"placeholder="Scrivi la parola">
            <input type="submit" value="Invia">
        </form>

    </div>    
    
</body>
</html>
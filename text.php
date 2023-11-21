<?php

$user_text = $_POST['user_text'];
$text = 'Il sole sorge all\'orizzonte, il suo bagliore dorato si diffonde, abbracciando la terra. Il sole dipinge il cielo, il suo calore avvolge ogni angolo. Guardo il sole brillare, il sole che splende alto nel cielo azzurro. Il sole illumina il mondo, il suo potere nutre la vita. Il sole è luce, è energia, è fonte di speranza. Il sole è il centro, il centro di questo universo, il sole che continua a risplendere, risplendere con una bellezza senza tempo';
$word_censured = ('***');
$new_text = str_replace($user_text, $word_censured, $text);

?>

<h1>
  Testo non censurato
</h1>
<p><?php echo $text; ?></p>
<p>Il testo è lungo: <?php echo strlen($text); ?> caratteri</p>
<h1>Parola da censurare</h1>
<p>La parola '<?php echo $user_text; ?>' deve essere censurata</p>
<h1>Testo censurato</h1>
<p><?php echo $new_text; ?></p>
<p>Il testo è lungo: <?php echo strlen($new_text); ?> caratteri</p>
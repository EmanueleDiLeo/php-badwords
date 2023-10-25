<?php

$paragraph = $_POST['paragraph'];
$censure = $_POST['censure'];

// Il primo parametro è l'elemento da cercare, il secondo è la parola che ma inserire al posto della prima, il terzo è la stringa da visualizzare,li quarto è un contatore che indica il numero delle sostituzioni
$paragraphCensere = str_ireplace($censure,"***",$paragraph)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-  
4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384- 
HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <title>PHP Badwords</title>
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <div class="offset-3 col-6">
        <span>Lunghezza testo: <?php echo strlen($paragraph) ?> </span>
        <h2 class="mb-5"><strong>Testo normale:</strong> <?php echo $paragraph ?></h2>
        <span>Lunghezza testo censurato: <?php echo strlen($paragraphCensere) ?> </span>
        <h2><strong>Testo censurato:</strong> <?php echo $paragraphCensere?></h2>
      </div> 
    </div>
  </div>
</body>
</html>
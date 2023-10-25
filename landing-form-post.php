<?php

$paragraph = $_POST['paragraph'];
$name = $_POST['name'];

$explosionName = explode(' ', $name);
$nameWords = count($explosionName);



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
        <h2><strong>Richiesta del problema:</strong> <?php echo $paragraph ?></h2>
        <h2><strong>Nome Autore:</strong> ***</h2>
      </div> 
    </div>
  </div>
</body>
</html>
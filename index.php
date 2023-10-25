<?php


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
        <form action="landing-form-post.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Scrivi il messaggio</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="10" placeholder="Scrivi un paragrafo"></textarea>
            <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Paragrafo"> -->
          <div class="mb-3">
            <label class="form-label">Censure</label>
            <input type="text" class="form-control" id="censure" name="censure" placeholder="Censura">
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>
      </div> 
    </div>
  </div>
</body>
</html>
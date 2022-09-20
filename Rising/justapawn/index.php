<!DOCTYPE html>
<html lang="en">

<head>
  <title>a pawn</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../../Components/includes.php" ?>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="king">
    <div class="container-fluid mb-4">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <img src="/Assets/img/pawns1.svg" />
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <h1> <i> Digite sua senha </i> </h1>
          <form class="bishop" method="POST" action="justapawn/CHECKmate.php">
            <input type="text" name="rook" class="rook" autocomplete="off">
            <button class="queen">Checkmate</button>
          </form>
          <h3>Apenas um seleto grupo entra na <i>ARASAKA</i>, prove o seu valor.</h3>
          <br>
          <p>Para começar os desafios, por favor insira a senha que lhe foi destinada.</p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

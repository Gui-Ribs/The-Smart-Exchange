<!DOCTYPE html>
<html lang="en">

<?php include "Components/includes.php"; ?>

<body>

  <?php
  include "Components/nav.php";
  ?>

  <div class="container-fluid mb-4">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <h1 class="mb-4">We are Excharge</h1>

        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
          electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
          Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
          electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
          Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </p>

      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-4">
        <div class="limite">
          <?php
          include 'Components/carousel.php'
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'Components/cards.php';
  ?>

  <div class="jumbotron text-center">
    <h1 class="display-4">A better place for <b>3V3RY0N3</b></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
      featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-danger disabled btn-lg" href="#" role="button">DO NOT FALL</a>
    </p>
  </div>
  <footer>
    <ul>
      Footer
    </ul>
  </footer>
</body>

</html>

<div class="accordion" id="accordionExample">
  <?php
  $i = 0;
  while ($i < 50) {
    $i += 1;

  ?>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading<?php echo $i?>">
        <button class="accordion-button <?php echo ($i > 1 ? "collapsed" : "") ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
          Accordion Item #<?php echo $i ?>
        </button>
      </h2>
      <div id="collapse<?php echo $i ?>" class="accordion-collapse collapse <?php echo ($i == 1 ? "show" : "") ?>" aria-labelledby="heading<?php echo $i ?>" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>

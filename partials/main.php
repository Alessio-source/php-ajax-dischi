
<main>
  <?php
    foreach ($data as $key => $value) {
   ?>
      <div class="disc">
        <img src="<?php echo $value['poster']; ?>" alt="">
        <p><?php echo $value['title']; ?></p>
        <p><?php echo $value['author']; ?></p>
        <p><?php echo $value['year']; ?></p>
      </div>
  <?php
    }
   ?>
</main>

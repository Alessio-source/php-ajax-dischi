
<main>
  <div class="container">
    <?php
      foreach ($data as $key => $value) {
     ?>
        <div class="disc">
          <img src="<?php echo $value['poster']; ?>" alt="">
          <p><strong><?php echo $value['title']; ?></strong></p>
          <p><?php echo $value['author']; ?></p>
          <p><?php echo $value['year']; ?></p>
        </div>
    <?php
      }
     ?>
  </div>
</main>

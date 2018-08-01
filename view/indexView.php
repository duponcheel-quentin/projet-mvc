<?php

  require "template/nav.php";
  require "template/header.php";

?>

<main>

  <?php foreach ($list as $key => $value): ?>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $value['title']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  <?php endforeach; ?>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <form method="post" action="">
        <div>
          <input type="text" name="title" value="">
        </div>
      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <input type="submit" name="addList" value="enregistrer">
    </form>
    </div>
  </div>

</main>

<?php

  require "template/footer.php"

?>

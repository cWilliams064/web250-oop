<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested ID

  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('bird.php');
  }

  // Find bicycle using ID

  $bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $bird->name(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="birds.php">Back to Inventory</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Common Name:</dt>
        <dd><?= h($bird->commonName); ?></dd>
      </dl>
      <dl>
        <dt>Habitat:</dt>
        <dd><?= h($bird->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Food:</dt>
        <dd><?= h($bird->food); ?></dd>
      </dl>
      <dl>
        <dt>Nest Placement:</dt>
        <dd><?= h($bird->nestPlacement); ?></dd>
      </dl>
      <dl>
        <dt>Behavior:</dt>
        <dd><?= h($bird->behavior); ?></dd>
      </dl>
      <dl>
        <dt>Conservation:</dt>
        <dd><?= h($bird->conservation()); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips:</dt>
        <dd><?= h($bird->backyardTips); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

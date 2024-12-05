<?php 

require_once('../../private/initialize.php');

?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Show Bird: ' . h($bird->name()); ?>

<div id="content">

  <a class="back-link" href="<?php echo $session->is_logged_in() ? url_for('./birds/index.php') : url_for('/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird show">

    <h1>Bird: <?php echo h($bird->commonName); ?></h1>

    <div class="attributes">
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

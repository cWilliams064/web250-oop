<?php 

require_once('../private/initialize.php'); 
include(SHARED_PATH . '/public-header.php');

?>

<nav>
  <ul>
    <li><a class="action" href="<?php echo url_for('/login.php'); ?>">Login</a></li>
    <li><a class="action" href="<?php echo url_for('/sign-up.php'); ?>">Sign Up</a></li>
  </ul>
</nav>

<?php
  
// Find all bicycles;
$birds = Bird::find_all();
  
?>
<?php $page_title = 'Birds'; ?>

<div id="content">
  <div class="bicycles listing">
    <h1>Birds</h1>

  	<table class="list" border="1">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($birds as $bird) { ?>
        <tr>
          <td><?= h($bird->commonName); ?></td>
          <td><?= h($bird->habitat); ?></td>
          <td><?= h($bird->food); ?></td>
          <td><?= h($bird->nestPlacement); ?></td>
          <td><?= h($bird->behavior); ?></td>
          <td><?= h($bird->conservation()); ?></td>
          <td><?= h($bird->backyardTips); ?></td>
          <td><a class="action" href="<?= url_for('/birds/show.php?id=' . h(u($bird->id))); ?>">View</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>


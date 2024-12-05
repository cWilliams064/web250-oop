<?php 

require_once('../../private/initialize.php');
require_login();
$birds = Bird::find_all();
  
?>

<?php $page_title = 'Birds'; ?>
<?php include(SHARED_PATH . '/user-header.php'); ?>

<div id="content">
  <div class="bicycles listing">
    <h1>Birds</h1>

    <div class="actions" style="padding-bottom: 20px;">
      <a class="action" href="<?php echo url_for('./birds/new.php'); ?>">Add Bird</a>
    </div>

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
        <th>&nbsp;</th>
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
          <td><a class="action" href="<?= url_for('birds/show.php?id=' . h(u($bird->id))); ?>">View</a></td>
          <td><a class="action" href="<?= url_for('birds/edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?= url_for('birds/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>


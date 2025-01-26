<?php 
  require_once('../private/initialize.php');
  $page_title = 'Sightings';
  include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<table id="inventory" border="1">
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
   
<?php

$birds = Bird::find_all();

?>
      
  <?php foreach($birds as $bird) { ?>
  <tr>
    <td><?= h($bird->commonName); ?></td>
    <td><?= h($bird->habitat); ?></td>
    <td><?= h($bird->food); ?></td>
    <td><?= h($bird->nestPlacement); ?></td>
    <td><?= h($bird->behavior); ?></td>
    <td><?= h($bird->conservation()); ?></td>
    <td><?= h($bird->backyardTips); ?></td>
    <td><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>
  </tr>
  <?php } ?>
  
</table>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

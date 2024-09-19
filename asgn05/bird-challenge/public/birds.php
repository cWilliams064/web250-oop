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
</tr>
   
<?php
  $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
  $birdArray = $parser->parse();
?>
      
  <?php foreach($birdArray as $args) { ?>
    <?php $bird = new Bird($args); ?>
    <tr>
        <td><?= h($bird->commonName); ?></td>
        <td><?= h($bird->habitat); ?></td>
        <td><?= h($bird->food); ?></td>
        <td><?= h($bird->nestPlacement); ?></td>
        <td><?= h($bird->behavior); ?></td>
        <td><?= h($bird->conservation()); ?></td>
        <td><?= h($bird->backyardTips); ?></td>
      </tr>
  <?php } ?>
</table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>

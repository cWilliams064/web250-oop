<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('./birds/index.php'));
}
?>

<dl>
  <dt>Common Name:</dt>
  <dd><input type="text" name="bird[commonName]" value="<?php echo h($bird->commonName); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat:</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>Food:</dt>
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>"></dd>
</dl>

<dl>
  <dt>Nest Placement:</dt>
  <dd><input type="text" name="bird[nestPlacement]" value="<?php echo h($bird->nestPlacement); ?>"></dd>
</dl>

<dl>
  <dt>Behavior:</dt>
  <dd><input type="text" name="bird[behavior]" value="<?php echo h($bird->behavior); ?>"></dd>
</dl>

<dl>
  <dt>Conservation Status:</dt>
  <dd>
    <select name="bird[conservationId]">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $id => $conservation) { ?>
      <option value="<?php echo $id; ?>" <?php if ($bird->conservationId == $id) { echo 'selected'; }; ?>><?php echo $conservation; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips:</dt>
  <dd><input type="text" name="bird[backyardTips]" value="<?php echo h($bird->backyardTips); ?>" /></dd>
</dl>

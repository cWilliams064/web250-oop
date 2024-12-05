<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($user)) {
  redirect_to(url_for('../public/index.php'));
}
?>

<dl>
  <dt>First name</dt>
  <dd><input type="text" name="user[firstName]" value="<?php echo h($user->firstName); ?>" /></dd>
</dl>

<dl>
  <dt>Last name</dt>
  <dd><input type="text" name="user[lastName]" value="<?php echo h($user->lastName); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="user[email]" value="<?php echo h($user->email); ?>" /></dd>
</dl>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="user[username]" value="<?php echo h($user->username); ?>" /></dd>
</dl>

<?php if ($session->is_admin()): ?>
<dl>
  <dt>User Level:</dt>
  <dd>
    <select name="user[userLevel]">
      <?php foreach(User::USER_LEVEL_OPTIONS as $id => $userLevel) { ?>
        <option value="<?php echo $id; ?>" <?php if ($user->userLevel == $id) { echo 'selected'; } ?>>
          <?php echo $userLevel; ?>
        </option>
      <?php } ?>
    </select>
  </dd>
</dl>
<?php endif; ?>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="user[password]" value="" /></dd>
</dl>

<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="user[confirmPassword]" value="" /></dd>
</dl>

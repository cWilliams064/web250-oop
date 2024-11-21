<?php require_once('../../../private/initialize.php'); ?>

<?php

$users = User::find_all();
  
?>

<?php $page_title = 'Users'; ?>

<div id="content">
  <div class="users listing">
    <h1>Users</h1>

    <div class="actions" style="padding-bottom: 20px;">
      <a class="action" href="<?php echo url_for('active-record/users/new.php'); ?>">Add User</a>
    </div>

  	<table class="list" border=1>
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>User Level</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($users as $user) { ?>
        <tr>
          <td><?= h($user->id); ?></td>
          <td><?= h($user->firstName); ?></td>
          <td><?= h($user->lastName); ?></td>
          <td><?= h($user->email); ?></td>
          <td><?= h($user->username); ?></td>
          <td><?= h($user->user_level()); ?></td>
          <td><a class="action" href="<?= url_for('./active-record/users/show.php?id=' . h(u($user->id))); ?>">View</a></td>
          <td><a class="action" href="<?= url_for('./active-record/users/edit.php?id=' . h(u($user->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?= url_for('./active-record/users/delete.php?id=' . h(u($user->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

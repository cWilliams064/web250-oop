<?php require_once('../../../private/initialize.php'); ?>

<?php
  
// Find all admins
$users = User::find_all();
  
?>
<?php $page_title = 'Users'; ?>

<div id="content">
  <div class="admins listing">
    <h1>Admins</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/admins/new.php'); ?>">Add Admin</a>
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
          <td><?php echo h($user->id); ?></td>
          <td><?php echo h($user->firstName); ?></td>
          <td><?php echo h($user->lastName); ?></td>
          <td><?php echo h($user->email); ?></td>
          <td><?php echo h($user->username); ?></td>
          <td><?php echo h($user->userLevel); ?></td>
          <td><a class="action" href="<?php echo url_for('./active-record/users/show.php?id=' . h(u($user->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('./active-record/users/edit.php?id=' . h(u($user->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('./active-record/users/delete.php?id=' . h(u($user->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

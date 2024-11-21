<?php require_once('../../../initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$user = User::find_by_id($id);

?>

<?php $page_title = 'Show Admin: ' . h($user->fullName()); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('./active-records/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin show">

    <h1>Admin: <?php echo h($user->fullName()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?php echo h($user->firstName); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?php echo h($user->lastName); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($user->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($user->username); ?></dd>
      </dl>
      <dl>
        <dt>User Level</dt>
        <dd><?php echo h($user->userLevel); ?></dd>
      </dl>
    </div>

  </div>

</div>

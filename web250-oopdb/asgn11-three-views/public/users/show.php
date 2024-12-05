<?php 

require_once('../../private/initialize.php');
require_admin();

$id = $_GET['id'] ?? '1'; // PHP > 7.0
$user = User::find_by_id($id);

?>

<?php $page_title = 'Show User: ' . h($user->fullName()); ?>
<?php include(SHARED_PATH . '/user-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('../public/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="user show">

    <h1>User: <?= h($user->fullName()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name:</dt>
        <dd><?= h($user->firstName); ?></dd>
      </dl>
      <dl>
        <dt>Last name:</dt>
        <dd><?= h($user->lastName); ?></dd>
      </dl>
      <dl>
        <dt>Email:</dt>
        <dd><?= h($user->email); ?></dd>
      </dl>
      <dl>
        <dt>Username:</dt>
        <dd><?= h($user->username); ?></dd>
      </dl>
      <dl>  
        <dt>User Level:</dt>
        <dd><?php if(empty($user->userLevel)) { echo "User Level has not been set."; } else { echo User::USER_LEVEL_OPTIONS[$user->userLevel]; } ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/user-footer.php'); ?>

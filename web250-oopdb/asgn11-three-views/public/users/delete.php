<?php

require_once('../../private/initialize.php');
require_admin();

if(!isset($_GET['id'])) {
  redirect_to(url_for('../public/users/index.php'));
}
$id = $_GET['id'];
$user = User::find_by_id($id);
if($user == false) {
  redirect_to(url_for('../public/users/index.php'));
}

if(is_post_request()) {

  // Delete admin
  $result = $user->delete();
  $session->message('The user was deleted successfully.');
  redirect_to(url_for('../public/users/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete User'; ?>
<?php include(SHARED_PATH . '/user-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('../public/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin delete">
    <h1>Delete Admin</h1>
    <p>Are you sure you want to delete this admin?</p>
    <p class="item"><?php echo h($user->fullName()); ?></p>

    <form action="<?php echo url_for('../public/users/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete User" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/user-footer.php'); ?>

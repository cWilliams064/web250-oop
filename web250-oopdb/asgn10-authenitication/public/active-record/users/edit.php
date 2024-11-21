<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('../public/active-record/users/index.php'));
}
$id = $_GET['id'];
$user = User::find_by_id($id);
if($user == false) {
  redirect_to(url_for('../public/active-record/users/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['user'];
  $admin->merge_attributes($args);
  $result = $user->save();

  if($result === true) {
    $_SESSION['message'] = 'The admin was updated successfully.';
    redirect_to(url_for('/staff/admins/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit Admin'; ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('../public/active-record/users/index.php'); ?>">&laquo; Back to List</a>

  <div class="user edit">
    <h1>Edit User</h1>

    <?php echo display_errors($user->errors); ?>

    <form action="<?php echo url_for('../public/active-record/users/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form-fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit User" />
      </div>
    </form>

  </div>

</div>

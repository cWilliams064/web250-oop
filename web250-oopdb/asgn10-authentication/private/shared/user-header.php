<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
  <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
  <meta charset="utf-8">    <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/css/user.css'); ?>">
  </head>

  <body>
    <header>
      <h1>WNC Birds Staff Area</h1>
    </header>

    <navigation>
      <ul>
        <?php if($session->is_logged_in()) { ?>
          <li>User: <?php echo $session->username; ?></li>
          <li><a href="<?php echo url_for('/users/index.php'); ?>">Home</a></li>
          <li><a href="<?php echo url_for('/users/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>

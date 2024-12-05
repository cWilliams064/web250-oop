<?php
  if(!isset($page_title)) { $page_title = 'User Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
  <title><?php if(isset($page_title)) {echo h($page_title);} ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/css/user.css'); ?>">
  </head>

  <body>
    <header>
      <h1>WNC Birds User Area</h1>
    </header>

    <navigation>
      <ul>
        <?php if($session->is_logged_in()) { ?>
          <li>User: <?= $session->username; ?></li>
          <?php if($session->is_admin()) { ?>
          <li><a href="<?= url_for('/users/index.php'); ?>">Users</a></li>
          <?php } ?>
          <li><a href="<?= url_for('/birds/index.php'); ?>">Birds</a></li>
          <li><a href="<?= url_for('../public/logout.php'); ?>">Logout</a></li>
        <?php } ?>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>

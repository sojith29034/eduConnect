<?php
require 'connect.php';
?>

<nav class="navbar sticky-top bg-primary">
  <div class="container-fluid">
    <h1 class="navbar-brand text-light">Welcome <?=$_SESSION['uname']?></h1>

    <div class="btns">
      <a href="../common/logout.php" class="btn btn-light"><i class="fas fa-sign-out-alt"> </i> Logout</a>
    </div>
  </div>
</nav>
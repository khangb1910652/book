<?php
$page_title = "Book Management";
include "templates/header-manage.php";
require "action/signup-action.php"
?>
<h2>Sign In</h2>

<form action="" method="POST">
        <label for="username">User Name</label>
        <input type="text" name="username" value="">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" value="">
        <br>
        <input type="submit" name="signin" value="Sign In">
    </form>
    <!-- <br> <a href="login.php">Go to login</a> -->
<?php
include "templates/footer-manage.php";
?>
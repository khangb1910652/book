<?php
$page_title = "Book Management";
include "templates/header-manage.php";
require "action/signup-action.php"
?>

<div class='main_login'>
    <form class='main_form' action="" method="POST">
        <h2 class='h2'>Sign up</h2>
        <input class='input_username' placeholder="Username" type="text" name="username" value="">
        <input class='input_username' placeholder="Password" type="password" name="password" value="">
        <input class='button' type="submit" name="signin" value="Sign Up">
    </form>
</div>
    <!-- <br> <a href="login.php">Go to login</a> -->
<?php
include "templates/footer.php";
?>
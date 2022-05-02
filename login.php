<?php
$page_title = "Book Management";
include "templates/header.php";
require "action/login-action.php";
?>
<h2>Login</h2>

<form action="" method="POST">
        <label for="username">User Name</label>
        <input type="text" name="username" value="">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" value="">
        <br>
        <input type="submit" name="login" value="Log In">
    </form>
<?php
include "templates/footer.php";
?>
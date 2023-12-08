<?php
$page_title = "Login";
include "templates/header.php";
require "action/login-action.php";
?>

<div class='main_login'>

        <form class='main_form' action="" method="POST">
            <p class="form_header">
                <svg
                width="32"
                height="32"
                viewBox="0 0 512 512"
                
                >
                <path
                    d="m64 496l0-256 48 0 0-80c0-71 57-128 128-128l16 0c71 0 128 57 128 128l0 80 48 0 0 256z m172-131l-12 83 48 0-12-83c12-5 20-17 20-30 0-18-14-32-32-32-18 0-32 14-32 32 0 13 8 25 20 30z m100-197c0-49-39-88-88-88-49 0-88 39-88 88l0 72 176 0z"
                />
                </svg>
                &nbsp&nbspLogin Now
            </p>
                <div class='my-5'>
                    <label for='username' class='block'>Username</label>
                    <input placeholder="Username" class="input_username" type="text" name="username" value="">
                </div>
                <div class='mt-5 mb-10'>
                    <label for='username' class='block'>Password</label>
                    <input placeholder="Password" class="input_username" type="password" name="password" value="">
                </div>
                <input class='button' type="submit" name="login" value="Login">
        </form>
</div>
<?php
include "templates/footer.php";
?>
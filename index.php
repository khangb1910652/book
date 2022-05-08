<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<div class='main_login'>
    <div class='main_form'>
        <a class='custom_button' href="login.php">
            <img class='fill_white' src='image/enter.svg' />&nbsp&nbsp&nbsp
            Login
        </a>
        <a class='custom_button clear' href="list-book.php">
            <img class='fill_white fill_purple' src='image/file.svg' />&nbsp&nbsp&nbsp
            List Book
        </a>
        <a class='custom_button clear' href="find-book.php">
            <img class='fill_white fill_purple' src='image/search.svg' />&nbsp&nbsp&nbsp
            Find Book
        </a>
    </div>
</div>
<?php
include "templates/footer.php";
?> 
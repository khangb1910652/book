<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>


<div class='main_login'>
    <div class='main_form'>
        <a class='custom_button clear' href="add-category.php">
            <img class='fill_white fill_purple' src='image/add.svg' />&nbsp&nbsp&nbsp
            Add Category
        </a>
        <a class='custom_button clear' href="add-book.php">
            <img class='fill_white fill_purple' src='image/add.svg' />&nbsp&nbsp&nbsp    
            Add Book
        </a>
        <a class='custom_button' href="edit-delete-book.php">
            <img class='fill_white' src='image/editing.svg' />&nbsp&nbsp&nbsp    
            Edit & Delete
        </a>
        <a class='custom_button clear' href="signup.php">
            <img class='fill_white fill_purple' src='image/add.svg' />&nbsp&nbsp&nbsp    
            Add Management Account
        </a>
    </div>
</div>


<?php
include "templates/footer.php";
?>
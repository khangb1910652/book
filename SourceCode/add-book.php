<?php
$page_title = "Add Book";
include "templates/header-manage.php";
?>
<div class='main_login'>
    <form style='height: 500px' class='main_form px-8 py-8' method="POST" acction = "" enctype="multipart/form-data">
        <h2 class='h2'>Add Book</h2>
        <div class='my-5'>
            <label for='bookname' class='block'>Book Name</label>
            <input class='input_username' placeholder='Book Name' type="text" name="bookname" id="bookname">
        </div>
        <div class='my-5'>
            <label for='author' class='block'>Author</label>
            <input class='input_username' placeholder='Author' type="text" name="author" id="author">
        </div>
        <div class='my-5'>
            <label for='des' class='block'>Describe</label>
            <input class='input_username' placeholder='Describe' type="text" name="des" id="des">
        </div>
        <div class='my-5'>
            <label for="img" class='block'>Image</label>
            <input class='input_username' type="file" name="img" id="img">
        </div>
        <div class='mb-10 mt-5'>
            <label for="idcat" class='block'>Caterogy</label>
            <select style='width: 342px;' class='input_username' name="idcat">
                <?php require "action/options-category.php";?>
            </select>
        </div>
        <div class='buttons_flex' style='margin-bottom: 20px;'>
            <input class='button' type="submit" name="submit" id="submit" value="Add">&nbsp&nbsp
            <input class='button' style="background-color: white; color: #000" type="reset" value="Clear">
        </div>
    </form>
</div>
<?php
    require "action/add-book-action.php";
?>
<?php
include "templates/footer.php";
?>
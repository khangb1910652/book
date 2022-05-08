<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>
<div class='main_login'>
    <form style='height: 350px;' class='main_form' method="POST" acction = "" enctype="multipart/form-data">
        <h2 class='h2'>Add Book</h2>
        <input class='input_username' placeholder='Book Name' type="text" name="bookname" id="bookname">
        <input class='input_username' placeholder='Author' type="text" name="author" id="author">
        <input class='input_username' placeholder='Describe' type="text" name="des" id="des">
        <div style='width: 320px; margin-bottom: 20px;' class='button_flex'>
            <label style='margin-right: 34px;' for="img">Image</label>
            <input type="file" name="img" id="img">
        </div>
        <div style='width: 320px; margin-bottom: 20px' class='button_flex'>
            <label for="idcat">Caterogy</label>&nbsp&nbsp&nbsp
            <select name="idcat">
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
include "templates/footer-manage.php";
?>
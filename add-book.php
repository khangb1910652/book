<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>
<h2>Add Book</h2>
<?php
    require "action/add-book-action.php";
?>
<form method="POST" acction = "" enctype="multipart/form-data">
    <label for="bookname">Book Name</label>
    <input type="text" name="bookname" id="bookname">
    <br>
    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    <br>
    <label for="des">Describe</label>
    <input type="text" name="des" id="des">
    <br>
    <label for="img">Image</label>
    <input type="file" name="img" id="img">
    <br>
    <label for="idcat">Caterogy</label>
    <select name="idcat">
        <?php require "action/options-category.php";?>
    </select>
    <br>
    <input type="submit" name="submit" value="Add">
    <input type="reset" value="Clear">
</form>
<?php
include "templates/footer-manage.php";
?>
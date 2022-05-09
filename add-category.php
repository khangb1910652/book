<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>
<?php
    require "action/add-category-action.php";
?>
<div class='main_login'>
    <form class='main_form' method="POST">
        <h2 class='h2'>Add Category</h2>
        <div class='my-5'>
            <label for='idcat' class='block'>ID Category</label>
            <input class='input_username' placeholder='ID Category' type="text" name="idcat" id="idcat">
        </div>
        <div class='mt-5 mb-10'>
            <label for='namecat' class='block'>Category</label>
            <input class='input_username' placeholder='Category' type="text" name="namecat" id="namecat">
        </div>
        <div class='buttons_flex'>
            <input class='button' type="submit" name="submit" id="submit" value="Add">&nbsp&nbsp
            <input class='button' style="background-color: white; color: #000" type="reset" value="Clear">
        </div>
    </form>
</div>
<?php
include "templates/footer.php";
?>
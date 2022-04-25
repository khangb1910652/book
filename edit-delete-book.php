<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<h2>Delete & Delete Book</h2>
<form action="delete-book-for-find.php" method="POST">
        <input type="text" size="40" name="search_kw" value="<?php empty($_REQUEST['search_kw']) || 
                                                            print $_REQUEST['search_kw'];?>"/>
        <input type="submit" name="search" value="Search">
        <br>
</form>
<?php
    require 'action/find-book-edit-delete.php';
    if (isset($_POST['search_kw'])) {
        search($_POST['search_kw']);
    }
?>
<?php
    require "data/connect-db.php";
    require "action/form.php";
    require "action/delete-book-action.php";
    require "action/edit-delete-list.php";
    require "action/edit-book-action.php";
    echo "<br>";
    page_nav_links($paging);
?>
<?php
include "templates/footer.php";
?>


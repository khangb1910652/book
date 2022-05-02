<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>
<h2>Delete Book</h2>
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
include "templates/footer-manage.php";
?>
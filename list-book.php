<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<h2>Find Book</h2>
<form action="find-book.php" method="POST">
        <input type="text" size="40" name="search_kw" value="<?php empty($_REQUEST['search_kw']) || 
                                                            print $_REQUEST['search_kw'];?>"/>
        <input type="submit" value="Search">
        <br>
</form>

<h2>List Book</h2>
<?php
    require "action/list-book-action.php";
    $paging = list_book();
    echo "<br>";
    page_nav_links($paging);
?>
<?php
include "templates/footer.php";
?>
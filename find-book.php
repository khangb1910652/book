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

<?php
    if (isset($_REQUEST['search_kw'])) {
        include 'action/find-book-action.php';
        $paging = search($_REQUEST['search_kw']);
        echo "<br>";
        page_nav_links($paging, $_REQUEST['search_kw']);
    }
?>
<?php
include "templates/footer.php";
?>
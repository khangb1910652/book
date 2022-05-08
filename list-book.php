<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<div class='main'>
    <div class='nav-bar'>
        <form class='search-form' action="find-book.php" method="POST">
            <input placeholder='Type some books' type="search" name="search_kw" value="<?php empty($_REQUEST['search_kw']) || 
                                                                print $_REQUEST['search_kw'];?>"/>
            <button type="submit" value="Search">
            <br>
        </form>
    </div>
    <?php
        require "action/list-book-action.php";
        $paging = list_book();
        echo "<div class='temp'></div>";
        echo "</div>";
        if("$paging[p_total]">0){
            page_nav_links($paging);
            }
    ?>

<?php
include "templates/footer.php";
?>
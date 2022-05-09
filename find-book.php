<?php
$page_title = "Find Book By Title";
include "templates/header.php";
?>
<div class='main'>
    <div class='nav-bar'>
        <form class='search-form' action="find-book.php" method="POST">
            <input placeholder='Type some books' type="search" name="search_kw" value="<?php empty($_REQUEST['search_kw']) || 
                                                                print $_REQUEST['search_kw'];?>"/>
            <button type="submit">
                <img class='fill_white' src='image/search.svg' />
            </button>
            <br>
        </form>
    </div>

<?php
    if (isset($_REQUEST['search_kw'])) {
        include 'action/find-book-action.php';
        $paging = search($_REQUEST['search_kw']);
        echo "<div class='temp'></div>";
        echo "</div>";
        if("$paging[p_total]">0){
        page_nav_links($paging, $_REQUEST['search_kw']);
        }
    }
?>
<?php
include "templates/footer.php";
?>
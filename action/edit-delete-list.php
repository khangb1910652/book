<?php
    $record_ppage = 6;
    $query = "SELECT count(*) FROM book ";
    $result = $conn->query($query);
    $row = $result->fetch_row();
    $p_total = ceil($row[0]/$record_ppage);
    $page = (isset($_REQUEST["page"]))? $_REQUEST["page"] : 1;
    $start = ($page - 1) * $record_ppage;
    $p_next = ($page > 1)? $page - 1 : 0;
    $p_pre = ($page < $p_total)? $page + 1 : 0;
    $paging = array("p_total"=>$p_total, "p_no"=>$page,
    "p_start"=>$start, "p_prev"=>$p_next,
    "p_next"=>$p_pre, "total"=>$row[0]);
    $query = "SELECT * FROM book b join category c on b.id_cat = c.id_cat"
        . " LIMIT $paging[p_start], $record_ppage";
    $result = $conn->query($query)
    or die ("DB accessed failed: " . $conn->error);
    $kq = $row[0];
    echo "<div class='body'>";
    while ($row = $result->fetch_assoc()){
        echo "<div class='flex_column'>";
        form_book($row);
            echo "<div class='flex_center flex_grow'>";
            edit_form($row);
            echo "&nbsp&nbsp&nbsp";
            del_form($row);
            echo "</div>";
            // echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    if ($result->num_rows == 0)
        echo <<<_WARING
            <script>
                alert ("No book!");
            </script>
        _WARING;
    function page_nav_links($paging) {
        echo "<div class='pagination'>";

        echo "<a class='button' href='list-book.php?" .
            "&page=" . $paging['p_prev'] ."'>Previous</a>&nbsp&nbsp&nbsp";
            
        echo "<input value=$paging[p_no]>&nbsp&nbsp";
        echo "<div> of &nbsp$paging[p_total]</div>&nbsp&nbsp&nbsp";
        echo "<a class='button' href='edit-delete-book.php?" .
            "&page=" . $paging['p_next'] ."'>Next</a>";
            
        echo "</div>";
    }

?>
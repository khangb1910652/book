<?php
    function list_book(){
        $record_ppage = 3;
        require "data/connect-db.php";
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
        echo <<<_title
            <h2>Total:  $kq books</h2>
        _title;
        while ($row = $result->fetch_assoc())
            echo <<<_LIST_FORM
                <img src="$row[img]"> <br>
                Title Book: $row[name_book] <br> 
                Author: $row[author] <br> 
                Describe: $row[des] <br> 
                Date Postted: $row[date] <br> 
                Category: $row[name_cat]<br>
                <hr>
            _LIST_FORM;
        if ($result->num_rows == 0)
            echo <<<_ADD_OK_PROMPT
                <script>
                    alert ("No book!");
                </script>
            _ADD_OK_PROMPT;
            return $paging;
    }
    function page_nav_links($paging) {
        echo "Page $paging[p_no]/$paging[p_total]:&nbsp&nbsp&nbsp";
        if ($paging['p_prev'] > 0) {
            echo "<a href='list-book.php?" .
            "&page=" . $paging['p_prev'] ."'>Previous</a>&nbsp&nbsp&nbsp";
            }
            if ($paging['p_next'] > 0) {
                echo "<a href='list-book.php?" .
                "&page=" . $paging['p_next'] ."'>Next</a>";
        }
    }

?>
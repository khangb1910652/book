<?php
    $record_ppage = 6;
    function search($keyword) {
        require "data/connect-db.php";
        require "form.php";
        global $record_ppage;
        $search_kw = str_replace(" ", "%' OR name_book LIKE '%", trim($keyword));

            $query = "SELECT count(*) FROM book "
            . "WHERE name_book LIKE '%$search_kw%'";
            
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

        $query = "SELECT * FROM book b join category c on b.id_cat = c.id_cat 
                WHERE name_book LIKE '%$search_kw%'"
                . " LIMIT $paging[p_start], $record_ppage";
        $result = $conn->query($query)
        or die ("DB accessed failed: " . $conn->error);
        $kq = $row[0];
        echo "<div class='body'>";
        while ($row = $result->fetch_assoc()){
            form_book($row);
        }
        echo "</div>";
        if ($result->num_rows == 0)
            echo <<<_WARING
                <script>
                    alert ("No title found");
                </script>
                _WARING;
            return $paging;
    }
    function page_nav_links($paging, $search_kw) {
        echo "<div class='pagination'>";
        if ($paging['p_prev'] > 0) {
            echo "<a class='button' href='find-book.php?search_kw=$search_kw" .
                "&page=" . $paging['p_prev'] ."'>Previous</a>&nbsp&nbsp&nbsp";
        }else{
            echo "<a class='button'" .
            "&page=" . $paging['p_prev'] ."'>Previous</a>&nbsp&nbsp&nbsp";
        };
        echo "<input value=$paging[p_no]>&nbsp&nbsp";
        echo "<div> of &nbsp$paging[p_total]</div>&nbsp&nbsp&nbsp";
        if ($paging['p_next'] > 0) {
            echo "<a class='button' href='find-book.php?search_kw=$search_kw" .
                "&page=" . $paging['p_next'] ."'>Next</a>";
        }else{
            echo "<a class='button'" .
            "&page=" . $paging['p_next'] ."'>Next</a>";
        };
        echo "</div>";
    }
?>

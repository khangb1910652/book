<?php
    function search($keyword) {
        require "data/connect-db.php";
        require "delete-book-form.php";
        $search_kw = str_replace(" ", "%' OR name_book LIKE '%", trim($keyword));
        $query = "SELECT * FROM book b join category c on b.id_cat = c.id_cat 
                WHERE name_book LIKE '%$search_kw%'";
        $result = $conn->query($query)
        or die ("DB accessed failed: " . $conn->error);
        $kq = $result->num_rows;
        echo <<<_title
            <h2>Search results:  $kq books</h2>
        _title;
        while ($row = $result->fetch_assoc())
            del_form_gen($row);
        if ($result->num_rows == 0)
            echo <<<_ADD_OK_PROMPT
                <script>
                    alert ("No title found");
                </script>
            _ADD_OK_PROMPT;
    }
?>
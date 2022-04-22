<?php
    $query = "SELECT * FROM book b join category c on b.id_cat = c.id_cat";
    $result = $conn->query($query)
    or die ("DB accessed failed: " . $conn->error);
    $kq =  $result->num_rows;;
    echo <<<_title
        <h2>Total:  $kq books</h2>
    _title;
    while ($row = $result->fetch_assoc())
        del_form_gen($row);
?>
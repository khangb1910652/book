<?php /* title-list-delete-form.php */
    function del_form_gen($row) {
        echo <<<_LIST_FORM
        <form action="delete-book.php" method="POST">
            <img src="$row[img]"> <br>
            Title Book: $row[name_book] <br> 
            Author: $row[author] <br> 
            Describe: $row[des] <br> 
            Date Postted: $row[date] <br> 
            Category: $row[name_cat]<br>
            <input type="submit" value="DELETE">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form>
        <hr>
    _LIST_FORM;
    } 
?>

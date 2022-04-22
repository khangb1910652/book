<?php
    function del_form($row) {
        echo <<<_DEL_FORM
        <form action="delete-book.php" method="POST">
            <input type="submit" value="DELETE">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form>
    _DEL_FORM;
    };
    function edit_form($row) {
        echo <<<_EDIT_FORM
        <form action="" method="POST">
            <input type="submit" value="EDIT">
            <input type="hidden" name="edit" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form> 
    _EDIT_FORM;
    };
    function form_book($row){
        echo <<<_FORM_BOOK
            <form id="form_book">
                <img src="$row[img]"> <br>
                Title Book: $row[name_book] <br> 
                Author: $row[author] <br> 
                Describe: $row[des] <br> 
                Date Postted: $row[date] <br> 
                Category: $row[name_cat]<br>
            </form>
        _FORM_BOOK;
    }
    
?>

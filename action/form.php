<?php
    function del_form($row) {
        echo <<<_DEL_FORM
        <form action="edit-delete-book.php" method="POST">
            <input type="submit" value="DELETE">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form>
    _DEL_FORM;
    };
    function edit_form($row) {
        echo <<<_EDIT_FORM
        <form action="edit-book.php" method="POST">
            <input type="submit" value="EDIT">
            <input type="hidden" name="edit" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form> 
    _EDIT_FORM;
    };
    function form_book($row){
        echo <<<_FORM_BOOK
            <form id="form_book">
                <div class='background-card'>
                    <img src="$row[img]"> 
                </div>
                <div class='body-card'>
                    <div>
                        <span class='header'>Title Book:</span>$row[name_book]<br> 
                        <span class='header'>Author:</span>$row[author]<br> 
                        <span class='header'>Describe:</span> <span class='line-clamp'>$row[des]</span>
                        <span class='header'>Date Postted:</span>$row[date]<br> 
                        <span class='header'>Category:</span>$row[name_cat]<br>
                    </div>
                </div>
            </form>
        _FORM_BOOK;
    }
    function form_edit_book($row){
        echo <<<_FORM_EDIT_BOOK
        <form method="POST" action = "edit-book.php" enctype="multipart/form-data">
            <input type="hidden" name="id_book" id="id_book" value="$row[id_book]">
            <label for="bookname">Book Name</label>
            <input type="text" name="bookname" id="bookname" value="$row[name_book]">
            <br>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="$row[author]">
            <br>
            <label for="des">Describe</label>
            <input type="text" name="des" id="des" value="$row[des]">
            <br>
            
            <label for="img">Image</label><br>
            <img src="$row[img]"> <br>
            <input type="hidden" name="img_cur" id="img_cur" value="$row[img]">
            <label for="img">Choose another picture</label>
            <input type="file" name="img" id="img">
            <br>
            <label for="idcat">Caterogy</label>
            <select name="idcat">
                <option value=$row[id_cat]>$row[name_cat]</option>
                <option value=$row[id_cat]>Tạm thời chưa làm được đổi thể loại</option>
            </select>
            <br>
            <input type="submit" name="edit_book" value="EDIT">
            <input type="reset" value="Clear">
        </form>
        _FORM_EDIT_BOOK;
    }
?>

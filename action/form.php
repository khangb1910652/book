<?php
    function del_form($row) {
        echo <<<_DEL_FORM
        <form action="edit-delete-book.php" method="POST">
            <input class='button' style='background-color: #fff; color: #000;' type="submit" value="DELETE">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="id_book" value="$row[id_book]">
        </form>
    _DEL_FORM;
    };
    function edit_form($row) {
        echo <<<_EDIT_FORM
        <form action="edit-book.php" method="POST">
            <input class='button' type="submit" value="EDIT">
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
                        <span class='header'>Post by:</span>$row[username]<br>
                    </div>
                </div>
            </form>
        _FORM_BOOK;
    }
    function form_edit_book($row){
        echo <<<_FORM_EDIT_BOOK
        <div class='main_login'>
            <form class='main_form' style='height: 500px' method="POST" action = "edit-book.php" enctype="multipart/form-data">
                <h2 class='h2'>Edit Book</h2>
                <div class='text-center' style='margin-bottom: 5px;'>
                    <img src="$row[img]">
                </div>
                <input class='input_username' placeholder='Book Name' type="text" name="bookname" id="bookname" value="$row[name_book]">
                <input class='input_username' placeholder='Author' type="text" name="author" id="author" value="$row[author]">
                <input class='input_username' placeholder='Describe' type="text" name="des" id="des" value="$row[des]">
                <div class='button_flex' style='width: 330px; margin-bottom: 30px;'>
                    <label for="img">Change picture</label>&nbsp&nbsp&nbsp
                    <input style='width: 200px' type="file" name="img" id="img">
                </div>
                <div class='button_flex' style='margin-bottom: 20px; width: 330px;'>
                    <label for="idcat">Caterogy</label>&nbsp&nbsp&nbsp
                    <select name="idcat">
                        <option value=$row[id_cat]>$row[name_cat]</option>
                        <option value=$row[id_cat]>Tạm thời chưa làm được đổi thể loại</option>
                    </select>
                </div>
                <div class='button_flex'>
                    <input class='button' type="submit" name="edit_book" value="EDIT">&nbsp&nbsp&nbsp
                    <input class='button' style='background-color: #fff; color: #000;' type="reset" value="Clear">
                </div>
            </form>
        </div>
        _FORM_EDIT_BOOK;
    }
?>

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
        <div class='main_login' style='height: 110vh;'>
            <form class='main_form' style='height: 720px; margin-top: 50px; margin-bottom: 20px' method="POST" action = "edit-book.php" enctype="multipart/form-data">
                <h2 class='h2' >Edit Book</h2>
                <div class='text-center' style='margin-bottom: 5px;'>
                    <img src="$row[img]">
                </div>
                <input type="hidden" name="id_book" id="id_book" value="$row[id_book]">
                <div class='my-5'>
                    <label for='bookname' class='block'>Book Name</label>
                    <input class='input_username' placeholder='Book Name' type="text" name="bookname" id="bookname" value="$row[name_book]">
                </div>
                <div class='my-5'>
                    <label for='bookname' class='block'>Book Name</label>
                    <input class='input_username' placeholder='Author' type="text" name="author" id="author" value="$row[author]">
                </div>
                <div class='my-5'>
                    <label for='bookname' class='block'>Book Name</label>
                    <input class='input_username' placeholder='Describe' type="text" name="des" id="des" value="$row[des]">
                </div>
                <input type="hidden" name="img_cur" id="img_cur" value="$row[img]">
                <div class='my-5'>
                    <label for="img" class='block'>Change Picture</label>
                    <input class='input_username' type="file" name="img" id="img">
                </div>
                <div class='mb-10 mt-5'>
                    <label for="idcat" class='block'>Caterogy</label>
                    <select style='width: 342px;' class='input_username' name="idcat">
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

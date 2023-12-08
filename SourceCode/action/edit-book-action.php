<?php
    // require "data/connect-db.php";
    if(isset($_POST["edit_book"])){
        if ($_FILES['img']['error'] == 0) {
            move_uploaded_file($_FILES["img"]["tmp_name"],
            "image/" . $_FILES["img"]["name"]);
            $img = ("image/" . $_FILES["img"]["name"]);
        }else{
            $img = $_POST['img_cur'];
        }
        $id_book = $_POST['id_book'];
        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $des = $_POST['des'];
        // $img = ("image/" . $_FILES["img"]["name"]);
        $idcat = $_POST['idcat'];
        $query = "UPDATE book SET name_book = '$bookname', author = '$author', des = '$des',img = '$img', date = current_timestamp,id_cat = '$idcat' where id_book = '$id_book'";

    if (!$conn->query($query))
        echo "<h3>INSERT failed. " . $mysql_error() . "</h3>";
    else
        echo <<<_WARING
            <script>
                alert ("'$bookname' has been edited");
            </script>
        _WARING;
        echo "Return to page <a href='edit-delete-book.php'>Edit and Delete</a> in 10 seconds!";
        echo header("refresh: 10; url = edit-delete-book.php");
    }
?>
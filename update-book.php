<?php
$page_title = "Book Management";
include "templates/header-manage.php";
?>
<h2>Update Book</h2>
<?php
    if(isset($_POST["update"])){
        require "data/connect-db.php";

    }
?>
<?php
    if(isset($_GET["id_book"])){
        require "data/connect-db.php";
        $query = "update category VALUES "
        . "('$idcat','$namecat')";

        if (!$conn->query($query))
            echo "<h3>INSERT failed. " . $mysql_error() . "</h3>";
        else
        echo <<<_ADD_OK_PROMPT
            <script>
            alert ("*$namecat has been added");
            </script>
            _ADD_OK_PROMPT;
        $conn->close();
        }
    }
?>
<form method="post" acction="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name = "idbook" id="idbook" value="<?=$res[id_book]?>" readonly>
    <input type="bookname" name = "bookname" id="bookname" value="<?=$res[name_book]?>">
    <input type="author" name = "author" id="author" value="<?=$res[author]?>">
    <input type="des" name = "des" id="des" value="<?=$res[des]?>">
    <input type="img" name = "img" id="img" value="<?=$res[img]?>">
    <input type="idcat" name = "idcat" id="idcat" value="<?=$res[id_cat]?>">
    <input type="submit" name="update" value="Update">
</form>
<br> <a href="index.php">Back to home</a>
<?php
include "templates/footer.php";
?>
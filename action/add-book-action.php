<?php
    require "data/connect-db.php";
    if(isset($_POST["submit"])){
        if ($_FILES['img']['error'] == 0) {
            move_uploaded_file($_FILES["img"]["tmp_name"],
            "image/" . $_FILES["img"]["name"]);
            }
            else
            echo "Upload error: " . $_FILES['up-file']['error'];

        $bookname = $_POST['bookname'];
        $author = $_POST['author'];
        $des = $_POST['des'];
        $img = ("image/" . $_FILES["img"]["name"]);
        $idcat = $_POST['idcat'];

        $query = "INSERT INTO book VALUES "
    . "(0,'$bookname', '$author', '$des', '$img', current_timestamp, '$idcat')";

    if (!$conn->query($query))
        echo "<h3>INSERT failed. " . $mysql_error() . "</h3>";
    else
    echo <<<_WARING
        <script>
        alert ("$bookname has been posted");
        </script>
        _WARING;
    $conn->close();
    }
?>
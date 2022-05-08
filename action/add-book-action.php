<?php
    require "data/connect-db.php";
    if(isset($_POST["submit"])){
        if(!empty($_POST['bookname']) && !empty($_POST['author']) && !empty($_POST['des']) && !empty($_POST['idcat']) && $_FILES['img']['error'] == 0){
            move_uploaded_file($_FILES["img"]["tmp_name"], "image/" . $_FILES["img"]["name"]);
            $bookname = $_POST['bookname'];
            $author = $_POST['author'];
            $des = $_POST['des'];
            $img = ("image/" . $_FILES["img"]["name"]);
            $idcat = $_POST['idcat'];
            $username = $_SESSION['username'];
            $query = "INSERT INTO book VALUES "
            . "(0,'$bookname', '$author', '$des', '$img', current_timestamp, '$idcat','$username')";
            if (!$conn->query($query))
                echo <<<_WARING
                <script>
                    alert ("Failed please try again!");
                </script>
                _WARING;
            else
                echo <<<_WARING
                    <script>
                    alert ("$bookname has been posted");
                    </script>
                    _WARING;
                $conn->close();
            }else
                echo <<<_WARING
                    <script>
                        alert ("Fields cannot be left blank!");
                    </script>
                _WARING;
    }
?>
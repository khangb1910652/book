<?php 
    require "data/connect-db.php";
    if (isset($_POST['delete']) && isset($_POST['id_book'])) {
        $id_book = $_POST['id_book'];
        $query = "delete from book where id_book='$id_book'";
        $query1 = "select * from book where id_book='$id_book'";
        $result = $conn->query($query1);
        if (!$conn->query($query)) {
                echo <<<_WARING
                    <script>
                    alert ("<h3> DELETE failed!"</h3>");
                    </script>
                _WARING;
        }else {
            $row = $result->fetch_assoc();
            echo <<<_WARING
                <script>
                alert ("'$row[name_book]' has been deleted");
                </script>
            _WARING;
        }
    }
?>
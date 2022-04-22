<?php 
    require "data/connect-db.php";
    if (isset($_POST['delete']) && isset($_POST['id_book'])) {
        $id_book = $_POST['id_book'];
        $query = "DELETE FROM book WHERE id_book='$id_book'";
        if (!$conn->query($query)) {
                echo <<<_DEL_OK_PROMPT
                    <script>
                    alert ("<h3> DELETE failed: " + $id_book + "+ Error: " + $conn_error + "</h3>");
                    </script>
                _DEL_OK_PROMPT;
        }else {
            echo <<<_DEL_OK_PROMPT
                <script>
                alert ("*Book '$id_book' has been deleted");
                </script>
            _DEL_OK_PROMPT;
        }
    }
?>
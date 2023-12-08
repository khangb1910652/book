<?php
    require "data/connect-db.php";
    if(isset($_POST["submit"])){
        if(!empty($_POST["idcat"]) && !empty($_POST["namecat"])){
            $idcat = $_POST['idcat'];
            $namecat = $_POST['namecat'];
            $query = "INSERT INTO category VALUES " . "('$idcat','$namecat')";
            if (!$conn->query($query))
                echo <<<_WARING
                    <script>
                        alert ("Failed please try again!");
                    </script>
                _WARING;
            else
                echo <<<_WARING
                    <script>
                    alert ("$namecat has been added!");
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
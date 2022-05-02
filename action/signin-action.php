<?php
require "data/connect-db.php";
if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $password = sha1($_POST["password"]);

    if ($username == "" || $password == "") {
        echo <<<_WARING
                <script>
                    alert ("Fields cannot be left blank!");
                </script>
            _WARING;
    }else{
        $query = "insert into user value ('$username','$password')";
        if(!$conn->query($query)){
            echo <<<_WARING
                    <script>
                        alert ("Username already exists!");
                    </script>
                _WARING;
        }else{ 
            echo <<<_WARING
                    <script>
                        alert ("Successful Sign In!");
                    </script>
                _WARING;
        }
    }
}
?>
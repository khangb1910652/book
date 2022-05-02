<?php
session_start();
require "data/connect-db.php";
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = sha1($_POST["password"]);

    $username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);

    if ($username == "" || $password == "") {
        echo <<<_WARING
                <script>
                    alert ("Fields cannot be left blank!");
                </script>
            _WARING;
    }else{
        $query = "select * from user where username = '$username' and password = '$password'";
        $result = $conn->query($query);
        if($result->num_rows == 0){
            echo <<<_WARING
                    <script>
                        alert ("Incorrect username and password!");
                    </script>
                _WARING;
        }else{ 
            $row = $result->fetch_assoc();
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];  
            header("location: index.php");
        }
    }
}
?>
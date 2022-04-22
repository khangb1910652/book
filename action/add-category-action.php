<?php
    require "data/connect-db.php";
    if(isset($_POST["submit"])){
        $idcat = $_POST['idcat'];
        $namecat = $_POST['namecat'];
        
        $query = "INSERT INTO category VALUES "
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
?>
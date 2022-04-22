<?php
    require "data/connect-db.php";
    $query = "SELECT * FROM category;";
    $result = $conn->query($query)
    or die("SELECT failed: " . $conn->error);
    echo "<option value=''>--Select--</option>"; 
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id_cat'] . "'>"
            . $row['name_cat'] . "</option>";
        }
    $conn->close();
?>

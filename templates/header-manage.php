<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time() ?>" />
    </head>
    <body>
        <a class="log_out" href="logout.php"><img class="icon" src="image/logout.png"></a> 
        <a class="back_to_home" href="management.php"><img class="icon" src="image/home.png"></a>
        
        <h1 class = "page-title"><?php echo $page_title; ?></h1>  
        <hr>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} 
// else {
//     echo "Wellcome " . $_SESSION['username'];
// }
?>

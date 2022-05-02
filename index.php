<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else {
    echo "Wellcome " . $_SESSION['username'];
}
?>

<ul>
    
    <li>
        <a href="list-book.php"><strong>List Book</strong></a>
    </li>
    <li>
        <a href="find-book.php"><strong>Find Book</strong></a>
    </li>
    <li>
        <a href="add-category.php"><strong>Add Category</strong></a>
    </li>
    <li>
        <a href="add-book.php"><strong>Add Book</strong></a>
    </li>
    <!-- <li>
        <a href="update-book.php"><strong>Update Book</strong></a>
    </li> -->
    <li>
        <a href="edit-delete-book.php"><strong>Edit & Delete</strong></a>
    </li>
    <li>
        <a href="signin.php"><strong>Add A Management Account</strong></a>
    </li>
</ul>

<a href="logout.php">Log out</a>
<?php
include "templates/footer.php";
?>
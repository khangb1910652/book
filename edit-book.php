<?php
$page_title = "Book Management";
include "templates/header.php";
?>
<h2>Edit Book</h2>
<?php
    require "action/form.php";
    require "data/connect-db.php";
    if (isset($_POST['edit']) && isset($_POST['id_book'])) {
        $id_book = $_POST['id_book'];
        $query = "SELECT * FROM book b join category c on b.id_cat = c.id_cat where id_book='$id_book';";
            $result = $conn->query($query)
            or die ("DB accessed failed: " . $conn->error);
            $row = $result->fetch_assoc();
            form_edit_book($row);
    }
    require "action/edit-book-action.php";
?>
<?php
include "templates/footer.php";
?>


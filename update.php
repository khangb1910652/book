<?php
foreach($result as $row){
?>
    <tr>
        <td><?php echo ($row["id_book"]);?></td>
        <td><?php echo ($row["name_book"]);?></td>
        <td><?php echo ($row["author"]);?></td>
        <td><?php echo ($row["des"]);?></td>
        <td><?php echo ($row["img"]);?></td>
        <td><?php echo ($row["date"]);?></td>
        <td><?php echo ($row["id_cat"]);?></td>
        <td><a href="update-book.php?id=<?php echo $row["id_book"];?>">Edit</a></td>
    </tr>
<?php
}
?>
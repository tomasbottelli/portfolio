<?php 
    $title=$_POST["title"];
    $content=$_POST["content"];

    $notesTable="SELECT * FROM note";
    $result=mysqli_query($status, $notesTable);
?>
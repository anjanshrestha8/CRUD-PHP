<?php
    require"./config.php";
    $tar = $_POST['id'];
    var_dump($tar);
    $query = "DELETE FROM  contacts WHERE (id = $tar)";
    $query_run = mysqli_query($conn,$query);
    header("Location:./index.php");

?>
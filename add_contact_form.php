<?php
    require"./config.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];
        $l_name = $_POST['l_name'];
        $ph_number = $_POST['ph_number'];
        $query = "INSERT INTO contacts (first_name,middle_name,last_name,phone_number) VALUES('$f_name','$m_name','$l_name','$ph_number')";
        $query_run = mysqli_query($conn,$query);
       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-New-Contacts</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="f_name" placeholder="First Name"> <br><br>
        <input type="text" name="m_name" placeholder="Middle Name"><br><br>
        <input type="text" name="l_name" placeholder="Last Name"><br><br>
        <input type="text" name="ph_number" placeholder="Phone Number"><br><br>
        <button type="submit">Insert</button>

    </form>
    <a href="./index.php"><button type="submit">Display Data</button></a>

    
</body>
</html>
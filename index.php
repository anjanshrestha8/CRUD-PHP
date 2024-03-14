<?php
    require"./config.php";
    $query = "SELECT * FROM contacts";
    $query_run = mysqli_query($conn,$query);
    $result = mysqli_fetch_all($query_run,MYSQLI_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD-OPERATION</title>
</head>
<body>
    <main>
        <!-- add new data section -->
        <section>
            <h1>Crud Operation Using PHP</h1>
            <p>Add new data on database:</p>
            <form action="./add_contact_form.php" method="POST">
                <button type="submit" class="add">Add New </button><br><br>
            </form>
            
        </section>
        <!-- data output in form of table -->
        <section>
            <h2>There are data from database:</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach($result as $values):?>
                <tr>
                    <td><?=$values['id']?></td>
                    <td><?=$values['first_name']?></td>
                    <td><?=$values['middle_name']?></td>
                    <td><?=$values['last_name']?></td>
                    <td><?=$values['phone_number']?></td>
                    <td>
                        <form action="edit_contact_form.php" method="POST">
                            <input type="hidden" name="id" value="<?=$values['id']?>">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete_contact_form.php" method="POST">
                            <input type="hidden" name="id" value="<?=$values['id']?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                   
                </tr>
                <?php endforeach?>
          

            </table>

        </section>
    </main>
    
</body>
</html>
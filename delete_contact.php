<?php
require("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Conformation</title>
</head>

<body>
    <main>
        <section>
            <h1>Do you want to delete the contact information of</h1>

            <?php
            $id = $_GET['id'];
            // $sql = "select * from contacts where id = {$id}";
            // mysqli_query($conn, $sql);
            // $result = mysqli_query($conn, $sql);
            // $sql = "SELECT * FROM contacts WHERE id = ?";
            $sql = "select * from contacts where id  = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            // $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
            $row = mysqli_fetch_assoc($result);
            // echo $id;
            if (isset($row)) {
                echo "<li>" . $row['first_name'] . " "
                    . $row['middle_name'] . " "
                    . $row['last_name'] . " "
                    . $row['phone_number'] . " "
                    . "</li>";
            } else {
                echo "No data found";
            }
            ?>
        </section>

        <section>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit">Confirm</button>
            </form>
        </section>
    </main>
</body>

</html>
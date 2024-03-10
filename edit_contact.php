<?php
require("./connect.php");

// Fetching Data
$id = $_GET['id'];
$sql = "select * from contacts where id  = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>

<body>
    <main>
        <section>
            <div class="formDiv">
                <form action="edit.php" method="post">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" value="<?php echo $row['first_name']; ?>">
                    <label for="">Middle Name</label>
                    <input type="text" name="middleName" value="<?php echo $row['middle_name']; ?>">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" value="<?php echo $row['last_name']; ?>">
                    <br>
                    <label for="">Phone Number</label>
                    <input type="number" name="phone" value="<?php echo $row['phone_number']; ?>">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button type="submit">Edit</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
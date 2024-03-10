<?php
require("./connect.php");


$sql = "select * from contacts";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book System</title>
</head>

<body>
    <main>
        <section>
            <div class="formDiv">
                <form action="add_contact.php" method="post">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" id="" required>
                    <label for="">Middle Name</label>
                    <input type="text" name="MiddleName" id="">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" id="" required>
                    <br>
                    <label for="">Phone Number</label>
                    <input type="number" name="phone" id="" required>
                    <br>
                    <button type="submit">Add</button>
                    <!-- <button>Search</button>
                    <button>Edit</button>
                    <button>Delete</button> -->
                </form>
            </div>
        </section>

        <section>
            <div class="fetchDiv">
                <?php
                echo "<table border='1'> ";
                echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Phone Number</th>";
                echo "</tr>";


                foreach ($row as $result) {
                    echo "<tr>";
                    echo "<td>" . $result['first_name'] . "</td>";
                    echo "<td>" . $result["middle_name"] . "</td>";
                    echo "<td>" . $result["last_name"] . "</td>";
                    echo "<td>" . $result["phone_number"] . "</td>";
                    // echo "<td>" . "<button>Edit</button>" . "</td>";
                    echo "<td> <a href=''></a> </td>";

                    echo "</tr>";

                }
                echo "</table>";

                ?>
            </div>
        </section>
    </main>
</body>

</html>
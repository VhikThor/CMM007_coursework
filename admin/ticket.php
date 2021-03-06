<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Ticket</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/css/bootstrap.css">

</head>

<body>
    <!--    header section  -->
    <section class="header">
        <a href="#.php" class="logo">2201692</a>
        <nav class="navbar">
            <a href="admin_home.php">Dashboard</a>
            <a class="active" href="ticket.php">Ticket</a>
            <a href="add.php">Add Customer</a>
            <a class="act" href="../dashboard.php">log out</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!--  header section end  -->


    <Section class="mainD">
        <div class="bodyD">
            <h2>Customer Tickets</h2>
            <div class="table table-responsive">
                <?php
                // Attempt select query exe
                $sql = "SELECT * FROM  images";
                if ($result = mysqli_query($connection, $sql)) {
                    if (mysqli_num_rows($result) > 0) {

                        echo "<table class='table table-bordered table-striped'>";
                        echo  "<thead>";
                        echo "<tr>";
                        echo  "<th scope = 'col'>S/N</th>";
                        echo "<th scope = 'col'>Name</th>";
                        echo "<th scope ='col'>Time</th>";
                        echo "<th colspan=3>Action</th>";
                        echo  "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['file_name'] . "</td>";
                            echo "<td>" . $row['uploaded_on'] . "</td>";
                            echo "<td>";
                            echo "<a href='ticket_view.php?id=" . $row['id'] . "' onclick='return confirm ('Are you sure')'>View</a> |<a href='ticket_delete.php?id=" . $row['id'] . "' onclick='return confirm ('Are you sure')'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                }

                // Close connection
                mysqli_close($connection);

                ?>

            </div>
        </div>
    </Section>

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>
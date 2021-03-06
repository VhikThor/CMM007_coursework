<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2201692 | About</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!--    header section starts  -->
    <section class="header">
        <a href="home.php" class="logo">2201692</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a class="active" href="about.php">about</a>
            <a href="locations.php">Locations</a>
            <a href="booking.php">book</a>
            <a href="ticket.php">ticket</a>
            <a class="act" href="logout.php">log out</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <!--    header section ends  -->
    <div class="heading" style="background:url(../images/bg2.jpg) no-repeat">
        <h1>about us</h1>
    </div>

    <!--  about section starts -->
    <section class="about">
        <div class="image">
            <img src="../images/c1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure mollitia eius
                dicta tempora repellat qui expedita nihil odit pariatur sed!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, similique fuga molestias facilis sunt culpa. Fugit minima rem
                laboriosam id, ipsa magni cumque accusamus et dicta soluta quam non quisquam!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, a nemo similique optio ex eius placeat asperiores, neque consectetur officia eaque sint maiores accusamus ut, nihil sunt eum nisi explicabo. Aliquid atque fugiat,
                fuga dicta ab nesciunt aperiam nostrum, accusamus quisquam voluptates hic sequi autem dolore ipsam amet excepturi tenetur!</p>
        
        </div>
    </section>

    <!-- footer section starts -->
    <?php
    require 'footer.php';
    ?>
    <!-- footer section ends -->

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>
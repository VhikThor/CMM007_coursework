<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2201692 | Booking</title>

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
            <a href="about.php">about</a>
            <a href="locations.php">Locations</a>
            <a class="active" href="booking.php">book</a>
            <a href="ticket.php">ticket</a>
            <a class="act" href="logout.php">log out</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <!--    header section ends  -->
    <div class="heading" style="background:url(../images/booking2.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_data.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>departure:</span>
                    <input type="date" name="departure">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>





    <!-- footer section starts -->
    <?php
    require 'footer.php';
    ?>
    </section>
    <!-- footer section ends -->

    <!-- custom js file link -->
    <script src="../js/script.js"></script>
</body>

</html>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>2201692 | Ticket</title>

     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

     <!-- custom css file link  -->
     <link rel="stylesheet" href="../css/style.css">
 </head>

 <body>

     <!--header section starts  -->
     <section class="header">
         <a href="home.php" class="logo">2201692</a>
         <nav class="navbar">
             <a href="home.php">home</a>
             <a href="about.php">about</a>
             <a href="locations.php">Locations</a>
             <a href="booking.php">book</a>
             <a class="active" href="ticket.php">ticket</a>
             <a class="act" href="logout.php">log out</a>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
     </section>

     <!--    header section ends  -->
     <section class="home">
         <div class="slide" style="background:url(../images/bg1.jpg) no-repeat">
             <div class="card ">
                 <div class="booking">
                     <h1 class="heading-title">Upload content</h1>

                     <form action="upload.php" method="POST" class="book-form" enctype="multipart/form-data">
                         <div class="flex">
                             <div class="inputBox">
                                 <input type="file" value="" name="file_name">
                             </div>
                             <input type="submit" value="Add Ticket" class="btn" name="upload">
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </section>
     <!--  booking section ends -->
     <!-- footer section starts -->
     <?php
        require 'footer.php';
        ?>
     <!-- footer section ends -->

    
     <!-- custom js file link -->
     <?php /* echo "<script> alert('$statusMsg');</script>";  */ ?>
     <script src="../js/script.js"> </script>

 </body>


 </html>
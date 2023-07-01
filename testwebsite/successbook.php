

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Destination Confirmed!</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">IliganExplores</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- booking section starts  -->

<section class="booking">
   <h1 class="heading-title">You have successfully booked your destination! 
</h1>
<center>
   <h2 style="font-size: 20px;">
      Here are your details that will serve as your receipt. <br>
      Please take a picture/screenshot this exact frame as it is an important piece of information.
   </h2>
</center>

    <br><br>


<?php
// Establish a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Retrieve the most recent record from the book_form table
$query = "SELECT * FROM book_form ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connection, $query);

// Check if any rows are returned
if (mysqli_num_rows($result) == 1) {
   $row = mysqli_fetch_assoc($result);
   // Display the data in a table format
   echo '<table style="border-collapse: collapse; width: 100%;">';
   echo '<tr style="background-color: #f2f2f2; font-weight: bold; font-size: 20px;">';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Name</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Email</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Phone</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Address</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Location</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Guests</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Arrivals</th>';
   echo '<th style="border: 1px solid #ddd; padding: 8px;">Leaving</th>';
   echo '</tr>';
   echo '<tr>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['name'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['email'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['phone'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['address'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['location'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['guests'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['arrivals'] . '</td>';
   echo '<td style="border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;">' . $row['leaving'] . '</td>';
   echo '</tr>';
   echo '</table>';
} else {
   echo "No data found.";
}

// Close the database connection
mysqli_close($connection);
?>



</section>



<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a> <i class="fas fa-envelope"></i> michaelkobe.lopez@g.msuiit.edu.ph </a>
         <a> <i class="fas fa-map"></i> Iligan City, Philippines - 9200 </a>
      </div>

      <div class="box">
         <h3>Follow us on these pages:</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

   <div class="credit"> Developed through the collaborative effort of <span>Code Poltergeists</span> | All Rights Reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<?php
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      // Check if any required fields are empty
      if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($location) || empty($guests) || empty($arrivals) || empty($leaving)) {
         echo '<script>alert("Please fill in all the required fields and try again."); window.location.href = "book.php";</script>';
         exit();
      } else {
         $connection = mysqli_connect('localhost','root','','book_db');
         $request = " INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving') ";
         mysqli_query($connection, $request);
         



         header('location:successbook.php');
         exit();
      }
   }
?>

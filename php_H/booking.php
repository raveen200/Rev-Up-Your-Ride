<?php

$server = 'sql205.epizy.com';
$username = 'epiz_32692430';
$password = 'E85zbnQoRGkyXCe';
$dbname = 'epiz_32692430_contact_db';


$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'Booking made successfully!';
   } else {
      $message[] = 'Booking failed';
   }
}

<?php
  include 'class.database.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  // Our database object
  $db = Database::getInstance();
  $mysqli = $db->getConnection(); 

  // Vars from form submitted values
  $firstname = $mysqli->real_escape_string($_POST['firstname']);
  $lastname = $mysqli->real_escape_string($_POST['lastname']);
  $address1 = $mysqli->real_escape_string($_POST['address1']);
  $address2 = $mysqli->real_escape_string($_POST['address2']);
  $address3 = $mysqli->real_escape_string($_POST['address3']);
  $city = $mysqli->real_escape_string($_POST['city']);
  $state = $mysqli->real_escape_string($_POST['state']);
  $postalcode = $mysqli->real_escape_string($_POST['postalcode']);
  $telephone = $mysqli->real_escape_string($_POST['telephone']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $villalocation = $mysqli->real_escape_string($_POST['villalocation']);
  $shoesize = $mysqli->real_escape_string($_POST['shoesize']);

  //We will use session vars to access the post vars on the success and failure pages
  //While we could have used something like $_SESSION['post-data'] = $_POST; to make an array of all values and access them as $_SESSION['post-data']['firstname']... incudidng them seperately allows us more control over the vars that are passed etc.

  //let's start the session
  session_start();
  
  // //finally, let's store our escaped/clean post values in the session variables
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  $_SESSION['address1'] = $address1;
  $_SESSION['address2'] = $address2;
  $_SESSION['address3'] = $address3;
  $_SESSION['city'] = $city;
  $_SESSION['state'] = $state;
  $_SESSION['postalcode'] = $postalcode;
  $_SESSION['telephone'] = $telephone;
  $_SESSION['email'] = $email;
  $_SESSION['villalocation'] = $villalocation;
  $_SESSION['shoesize'] = $shoesize;

  session_write_close();


  //Check to see if email already exists in raffle_entries
  $sql_query = "SELECT raffle_entries_id, firstname, lastname, email FROM raffle_entries WHERE email = '$email' ";
  $result = $mysqli->query($sql_query);
    
  //Check to see if email is already in system if so warn user if not add user
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      header("Location: fail_entry.php");
    }
  } else {
    //Prep the query
    $sql_query = "INSERT INTO `raffle_entries` (`firstname`, `lastname`, `address1`, `address2`, `address3`, `city`, `state`, `postalcode`, `telephone`, `email`, `villalocation`, `shoesize`) VALUES ('$firstname','$lastname','$address1','$address2','$address3','$city','$state','$postalcode','$telephone','$email','$villalocation','$shoesize')";
    //Insert the values into the database
    $result = $mysqli->query($sql_query);
    header("Location: success_entry.php");
  }
}

?>
<?php
  //We start our session, so we have access to stored data
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <title>PHP Insert Form Data into MySQL DB Example</title>
  </head>
<body>
  <div id="pageWrap">
    <div id="RaffleWrap">
      <h1>Jordan's Raffle</h1>
      
    </div>
    <div id="raffleFormWrap">
      <div id="raffleForm" class="basic-grey">
        <h1>Error processing Raffle Entry
          <span><br/><?php echo "The email <strong>".$_SESSION['email']."</strong> has already been registered for the raffle and can only be entered once.". ' Please verify your email and <a href="index.php"> try again</a> . Below is the information you entered.';
          ?>
          </span>
        </h1>
        <div class="columns">
          <div class="left" >First Name :</div>
          <div class="right"><?php echo $_SESSION['firstname']; ?></div>
          <div class="left" >Last Name :</div>
          <div class="right"><?php echo $_SESSION['lastname']; ?></div>
          <div class="left" >Address :</div>
          <div class="right"><?php echo $_SESSION['address1']; ?></div>
          <div class="left" >Address 2 (optional) :</div>
          <div class="right"><?php echo $_SESSION['address2']; ?></div>
          <div class="left" >Address 3 (optional) :</div>
          <div class="right"><?php echo $_SESSION['address3']; ?></div>
          <div class="left" >City :</div>
          <div class="right"><?php echo $_SESSION['city']; ?></div>
          <div class="left" >State :</div>
          <div class="right"><?php echo $_SESSION['state']; ?></div>
          <div class="left" >Zip / Postal Code :</div>
          <div class="right"><?php echo $_SESSION['postalcode']; ?></div>
          <div class="left" >Telephone :</div>
          <div class="right"><?php echo $_SESSION['telephone']; ?></div>
          <div class="left" >Email :</div>
          <div class="right"><?php echo $_SESSION['email']; ?></div>
          <div class="left" >Villa Location :</div>
          <div class="right"><?php echo $_SESSION['villalocation']; ?></div>
          <div class="left" >Shoe Size :</div>
          <div class="right"><?php echo $_SESSION['shoesize']; ?></div>
        </div>
        <div class="clear"></div>
        <span class="bottomSpacer">&nbsp;</span>
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <title>PHP Insert Form Data into MySQL DB Example</title>
  <!--JQuery Dependancy-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!--JQuery Validator Dependancy-->
  <script src="js/jquery.validate.js"></script>
  <script src="js/jquery.validate.rules.js"></script>
  <script src="js/jquery.validate.additional.js"></script>
  <script src="js/jquery.maskedinput.js"></script>
</head>
<body>
	
  <div id="pageWrap">
    <div id="RaffleWrap">
      <h1>Jordan's Raffle</h1>
      <p>Use the form below to be entered into the raffle and you could win some Jordan's.</p>
    </div>
    <div id="raffleFormWrap">
      <form id="raffleForm" class="basic-grey" method="post" action="process_entry.php">
        <h1>Raffle Entry Form
          <span>Please fill all the texts in the fields.</span>
        </h1>
        <label for="firstname">
          <span>First Name :</span>
          <input id="firstname" type="text" name="firstname" placeholder="First Name" />
        </label>
        <label>
          <span>Last Name :</span>
          <input id="lastname" type="text" name="lastname" placeholder="Last Name" />
        </label>
        <label>
          <span>Address :</span>
          <input id="address1" type="text" name="address1" placeholder="Address" />
        </label>
        <label>
          <span>Address Line 2:</span>
          <input id="address2" type="text" name="address2" placeholder="Address Line 2 (Optional)" />
        </label>
        <label>
          <span>Address Line 3:</span>
          <input id="address3" type="text" name="address3" placeholder="Address Line 3 (Optional)" />
        </label>
        <label>
          <span>City :</span>
          <input id="city" type="text" name="city" placeholder="City" />
        </label>
        <label>
          <span>State :</span>
          <select name="state">
            <option value="">Select Your State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </label>
        <label>
          <span>Zip/Postal Code :</span>
          <input id="postalcode" type="text" name="postalcode" placeholder="Zip / Postal Code" />
        </label>
         <label>
          <span>Telephone :</span>
          <input id="telephone" type="text" name="telephone" placeholder="Telephone" />
        </label>
         <label>
          <span>Email :</span>
          <input id="email" type="text" name="email" placeholder="Email" />
        </label>
        <label>
        	<span>VILLA Location</span>
        	<select id ="villalocation" name="villalocation">
        		<option value="">VILLA location</option>
        		<option value="Chicago">Chicago</option>
        		<option value="Milwaukee">Milwaukee</option>
        		<option value="Philadelphia">Philadelphia</option>
        		<option value="Reading">Reading</option>
        		<option value="Wilmington">Wilmington</option>
        		<option value="Cleveland">Cleveland</option>
        		<option value="Detroit">Detroit</option>
        		<option value="Rochester">Rochester</option>
        		<option value="Minneapolis">Minneapolis</option>
        		<option value="Dallas">Dallas</option>
        		<option value="Pittsburgh">Pittsburgh</option>
          </select>
        </label>
        <label><span>Shoe Size</span>
        	<select id ="shoesize" name="shoesize">
        		<option value="">Shoe Size</option>
        		<option value="6">6</option>
        		<option value="6.5">6 1/2</option>
        		<option value="7">7</option>
        		<option value="7.5">7 1/2</option>
        		<option value="8">8</option>
        		<option value="8.5">8 1/2</option>
        		<option value="9">9</option>
        		<option value="9.5">9 1/2</option>
        		<option value="10">10</option>
        		<option value="10.5">10 1/2</option>
        		<option value="11">11</option>
        		<option value="11.5">11 1/2</option>
        		<option value="12">12</option>
        		<option value="12.5">12 1/2</option>
        		<option value="13">13</option>
          </select>
        </label>
        <div class="buttonWrap">
        	<input id="resetButton" type="reset" class="button" value="Clear" />
        	<input id="submitButton" type="submit" class="button" value="Send" />
        </div>
        <span class="bottomSpacer">&nbsp;</span>
      </form>
    </div>
  </div>
</body>
</html>


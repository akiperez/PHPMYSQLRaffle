
$().ready(function() {
    // validate signup form on keyup and submit
    $('#telephone').mask("(999) 999-9999");
    $('#postalcode').mask("99999?-9999");

    $("#raffleForm").validate({
      rules: {
        firstname: {
          required: true,
          minlength: 2
        },
        lastname: {
          required: true,
          minlength: 2
        },
        address1: {
          required: true,
          minlength: 2
        },
        city: {
          required: true,
          minlength: 2,
          lettersonly: true
        },
        state: {
        	required: true
        },
        postalcode: {
        	required: true,
          zipcodeUS: true
        },
        telephone: {
        	required: true,
        	phoneUS: true
        },
        email: {
          required: true,
          email: true
        },
        villalocation:{
          required: true
        },
        shoesize:{
          required: true
        }
      },
      messages: {
        firstname: {
          required: "Please enter your first name",
          minlength: "Your firstname must consist of at least 2 characters"
        },
        lastname: {
          required: "Please enter your last name",
          minlength: "Your lastname must consist of at least 2 characters"
        },
        address1: {
          required: "Please enter your address",
          minlength: "Your address must consist of at least 2 characters"
        },
        city: {
          required: "Please enter your city",
          minlength: "Your city must consist of at least 2 characters"
        },
        state: "Please select your state from the drop down",
        postalcode: {
          required: "Please provide a zipcode / postal code"
        },
        email: "Please enter a valid email address",
        villalocation: "Please select your VILLA location from the drop down",
        shoesize: "Please select your shoe size from the drop down",
      }
    });

  });
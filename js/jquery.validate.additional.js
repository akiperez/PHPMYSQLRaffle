/**
 * Matches US phone number format
 *
 * where the area code may not start with 1 and the prefix may not start with 1
 * allows '-' or ' ' as a separator and allows parens around area code
 * some people may want to put a '1' in front of their number
 *
 * 1(212)-999-2345 or
 * 212 999 2344 or
 * 212-999-0983
 *
 * but not
 * 111-123-5434
 * and not
 * 212 123 4567
 */
$.validator.addMethod( "phoneUS", function( phone_number, element ) {
	phone_number = phone_number.replace( /\s+/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]([02-9]\d|1[02-9])-?\d{4}$/ );
}, "Please enter a valid 10 digit US number with area code" );

/**
 * Letters only format
 *
 * where the input should only be letters and may not include digits
 *
 * A-Z or
 * a-z
 *
 * but not
 * 0-9 and a-z or A-Z
 */
$.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
}, "Letters only please"); 

/**
 * Matches US zipcode number format
 *
 * where the zip code may not include the trailing 4 digits
 * removes '-' from input value if only 5 digits present
 *
 * 12010 or
 * 12010-5678
 *
 * but not
 * 12010-123_
 * and not
 * 120_0-1234
 */
$.validator.addMethod('zipcodeUS', function(postalcode, element) {
	//removes placeholder from string
    postalcode = postalcode.split("_").join("");

    //Checks the length of the zipcode now that placeholder characters are removed.
    if (postalcode.length === 6) {
    	//Removes hyphen
        postalcode = postalcode.replace("-", "");
    }

    //validates postalcode.
    return this.optional(element) || postalcode.match(/^\d{5}$|^\d{5}\-\d{4}$/);
}, "The specified US ZIP Code is invalid");

/*
 * Validates User entered email addresses
 *
 *
 */
$.validator.methods.email = function( value, element ) {
  return this.optional( element ) || /[a-z]+@[a-z]+\.[a-z]+/.test( value );
}



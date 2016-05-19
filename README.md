# PHPMYSQLRaffle

This project is simple PHP MYSQL application sample raffle.
The Application takes data entered by users on the index.php and pushed the data into a MYSQL Database for an imaginary raffle.

The application features JS form validation and will only allow unique email address to be entered into the raffle.
It allows users to sign up for the raffle and shows a success or failure based on the data entered.
The JS validation checks the data before the user submit to offload this work to the client.

## Dependencies
- JQuery (Included in the index.html)
- JQuery Validator (Included in the index.html)
- Code must be loading into a PHP MYSQL environment and Database and Table need to be set up.
- SQL file is included in this repo (raffle_entries.sql) to help with DB and Table creation which also adds in sample data to the Database.

## Steps to Follow

- git clone - https://github.com/akiperez/PHPMYSQLRaffle.git
- cd into PHPMYSQLRaffle
- edit config.php with your MYSQL Server connection details
- use creation sql (raffle_entries.sql) to create DB abd table.
- open index.php in your hosting environment.

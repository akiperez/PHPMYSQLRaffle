# PHPMYSQLRaffle

This project is a simple PHP MYSQL application for a raffle.
The Application allow users to sign up for a raffle and takes the data entered by users on a form in the index.php validates it and pushes the data into a MYSQL Database for an imaginary raffle.



The application features JS form validation and will only allow unique email addresses to be entered into the raffle. It allows users to sign up for the raffle and shows a success or failure based on the data entered.
The JS validation checks the users data before the user submits to offload this work on to the client.

## Dependencies
- JQuery (Included in the index.html)
- JQuery Validator (Included in the index.html)
- Code must be loaded into a PHP MYSQL environment and Database and Table need to be set up.
- An SQL file is included in this repo (raffle_entries.sql) to help with DB and Table creation.

## Steps to Follow

- git clone - https://github.com/akiperez/PHPMYSQLRaffle.git
- cd into PHPMYSQLRaffle
- edit config.php with your MYSQL Server connection details
- use creation sql (raffle_entries.sql) to create DB abd table.
- open index.php in your hosting environment.

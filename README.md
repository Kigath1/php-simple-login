# simple-login-logout
This is a simple log in and log out php web page code
This is a php simple login and logout website 

On loading the page the index.php loads and prompts the user to enter their username and password 
After entering their details, the folder "handle" contains the handle requests to the database 
in the handle/login.php is a database connection which verifies that the username and password are correct which then proceeds to the index.html 

index.html is a simple notification page to show that you are already logged into the "system"
Above that the page has a log out option which terminates the session the session had already started upon logging in 

Have also created an sql script for the table creation 
    - get it inside the file "database.sql"# php-simple-login

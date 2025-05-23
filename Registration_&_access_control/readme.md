# Login System with Session-Based Access Control (PHP/MySQL)
This application is a simple login and registration system for a company, using PHP, MySQL, and sessions to manage user access.

## The admin account login details are:
- Username: admin
- Password: admin

## Key Features
- Two user roles: admin and employee
- Session management: Only logged-in users can access their respective home pages
- Secure authentication: Passwords are hashed using ripemd160
- User redirection: Based on user type, users are redirected to either the Admin Home Page or Employee Home Page

## Pages
- index.php: Employee registration page
- login.php: Handles login requests, authenticates users, and starts a session
- connection.php: Connects to a custom database with a user table
- adminHome.php: Accessible only to admins, shows a personalized greeting
- employeeHome.php: Accessible only to employees, also shows a greeting
- logout.php: Ends the session and logs the user out
- company.sql: The SQL needed to create the database

## Installation & Setup

1. Place the project files in your PHP server's root directory (e.g., `htdocs` for XAMPP).
2. Import [company.sql](company.sql) into your MySQL server using phpMyAdmin or the MySQL command line.
3. Update database connection settings in the [connection.php](connection.php) file.
4. Access the application in your browser via `http://localhost/[your-folder-name]/`.
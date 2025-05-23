# Book Club CRUD Application
This is a simple CRUD (Create, Read, Update, Delete) web application built with PHP and MySQLi for managing member information in a fictional Book Club. Users can add, view, update, and delete member records using web forms and a MySQL database.

## Key Features
- View all members
- Add a new member
- Update existing member details
- Delete a member
- Input validation and status messages for each action

## Pages
- index.php: Displays all members in a table (READ)
- addMember.php: Add a new member (CREATE)
- updateMember.php: Update member info using their ID (UPDATE)
- deleteMember.php: Delete a member using their ID (DELETE)
- connection.php: Handles database connection
- bookclub.sql: SQL file for creating the database and member table


## Installation & Setup

1. Place the project files in your PHP server's root directory (e.g., `htdocs` for XAMPP).
2. Import [bookclub.sql](bookclub.sql) into your MySQL server using phpMyAdmin or the MySQL command line.
3. Update database connection settings in the [connection.php](connection.php) file.
4. Access the application in your browser via `http://localhost/[your-folder-name]/`.
<?php

//When a user logs out:
// 1. Destroy the session
// 2. Redirect to the registration page

// code for destroying a session found https://www.php.net/manual/en/function.session-destroy.php

// resume the session
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session.
session_destroy();

//after destroying the session, redirect the user back to the registration page
header('location: index.php');

?>

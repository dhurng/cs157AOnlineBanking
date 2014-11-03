<?php
session_start();

echo <<<_END
    <!DOCTYPE html>
    <html>
    <head>
_END;

require_once 'functions.php';

$userstr = " (Guest)";

if (isset($_SESSION['user'])){
    $user       = $_SESSION['user'];
    $loggedin   = TRUE;
    $userstr    = " ('$user')";
} else {
    $loggedin   = FALSE;
}

echo <<<_END
        <title>F8L Online Banking $userstr</title>
        <link rel='stylesheet' type='text/css' href='styles.css'>
    </head>
    <body>
          <div><h1>$appname$userstr</h1></div>  
_END;
?>

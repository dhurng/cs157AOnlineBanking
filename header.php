<?php
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
        <title>F8L Online Banking</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    <body>
            
_END;
?>

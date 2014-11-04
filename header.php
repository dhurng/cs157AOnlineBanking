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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>F8L Exception Bank $userstr</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
          <div><h1>$appname$userstr</h1></div>  
_END;
?>

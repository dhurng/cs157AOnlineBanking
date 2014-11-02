<?php
    $dbhost     = 'localhost';
    $dbname     = 'f8lbank';
    $dbuser     = 'admin';
    $dbpassword = 'password';
    $appname    = 'F8L Bank';
    
    $connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    if ($connection->connect_error) die ($connection->connect_error);
    
    function queryMysql($query){
        global $connection;
        $result = $connection->query($query);
        if (!$result) die ($connection->error);
        
        return $result;
    }
    
    function destroySession(){
        $_SERVER = array();
        
        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie (session_name (), '', time() - 2592000, '/');
        
        session_destroy();
    }
?>
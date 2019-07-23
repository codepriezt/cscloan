<?php
//database_connection.php   
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"], 1);


$active_group = 'default';
$query_builder = TRUE;

//intiliazing a connection
$db ['default']= array(
        'dsn' => '',
        'hostname'=> $cleardb_server,
        'username'=> $cleardb_username,
        'password'=> $cleardb_password,
        'database' => $cleardb_db,
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
);












//     // connect to my pgsql db 

//     $connect  = new PDO ("mysql:host=" . $host . ";port=" . $port  . ";dbname=" . $dbname .";user=" .$user. ";password=" . $password) ;



// $connect = PDO::setAttribute(PDO::ATTR_ERRMODE ,PDO::EERMODE_EXCEPTION);
// }
// catch(PDOException $e){
//     echo 'connection failed: '. $e->getmessage();
// }



?>
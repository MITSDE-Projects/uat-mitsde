<?php
    /* Database configuration details */

    $dbhost = 'localhost';
    //$dbusername = 'root';
    //$dbpassword = '';
    //$dbname = 'avantika_admission';

    /* Create Database Connection */
    
      $dbusername = 'avantiow_dbuser';
    $dbpassword = 'g_mxP0iGba.(';
    $dbname = 'avantiow_avantika_db';

    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die('connect_error'.$conn -> connect_error);
    }
    ?>
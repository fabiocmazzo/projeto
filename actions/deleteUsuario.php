<?php
   require_once '../includes/config.php';
   
    
    $username =  $_REQUEST['id'];
       
    if($_SESSION['isAdmin'] == 'S') {
        $sql = 'delete from usuarios where username = '. $username;
        $db->query($sql);
	}
    
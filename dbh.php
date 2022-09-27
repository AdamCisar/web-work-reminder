<?php

class Connection{
    

    private function Connection(){
        
     
    try {
    $username = 'root';
    $password = '';
    $dbh = new PDO('mysql:host=localhost;dbname=webcisar', $user, $password);
    return $dbg; 
        
    }
    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
    }
        
       
}
<?php
function Connection(){
    global $connection;
    $connection = mysqli_connect('localhost','root','','webcisar');
    
    
    
    }
    
function Add(){
    global $connection;
    
    $name = $_POST['name'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    
    $query = "INSERT INTO tasks(name,place,date) VALUES('$name','$place','$date')";
        
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('Nepodarilo sa zapisat data do databazy'.mysqli_error());
    }
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>
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
    
    
function WriteOnScreen(){
    global $connection;
    
    $query = "SELECT * FROM tasks";
    
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('Nepodarilo sa precitat data z databazy'.mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'];
        echo ' ';
        echo $row['name'];
        echo ' ';
        echo $row['place'];
        echo ' ';
        echo $row['date'];
        echo '<br>';
    }
}    
    
function Delete(){
    global $connection;
    $id = $_POST['id'];
        
    $query = "DELETE FROM tasks WHERE id = '$id'";
        
    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Nepodarilo sa vymazat data z databazy'.mysqli_error());
    }    


}
    
?>
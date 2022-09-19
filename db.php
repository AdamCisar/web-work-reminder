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
    
    $name = mysqli_real_escape_string($connection,$name);
    $place = mysqli_real_escape_string($connection,$place);
    $date = mysqli_real_escape_string($connection,$date);
    
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
        echo "<tr><td>". $row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['place'].'</td><td>'.$row['date'].'</td></tr>';
       
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
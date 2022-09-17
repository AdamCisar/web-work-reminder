<?php
    include 'db.php';
    Connection();

    
    if(isset($_POST['submit'])){
        Add();
    }
       
    if(isset($_POST['delete'])){
        Delete();
    }
    

    $query = "SELECT * FROM tasks";
    $result = mysqli_query($connection,$query);


?>





<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    
    <form action="index.php" method="post">
        
        <input type="text" name="name" placeholder="Meno a priezvisko" > <br>
        <input type="text" name="place" placeholder="Miesto" ><br>
        <input type="date" name="date" placeholder="Dátum" > <br>
        <input type="submit" name="submit" value="Potvrdiť" >
        
        <input type="submit" name="delete" value="vymazat">
        
         <select name="id" id="">
        
        
        <?php
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
            
        }
    ?>
        
        
    </select>
    </form>
    
    <?php
    WriteOnScreen();
    
    ?>
    
   

</body>
</html>

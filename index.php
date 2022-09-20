<?php
    include 'db.php';
    Connection();

    
    if(isset($_POST['submit'])){
        Add();
    }
       
    if(isset($_GET['id'])){
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
    <link rel="stylesheet" href="style.css" >
</head>

<body>
   <div class="container">
    <form action="index.php" method="post">
        
        <input type="text" name="name" placeholder="Meno a priezvisko" > <br>
        <input type="text" name="place" placeholder="Miesto" ><br>
        <input type="date" name="date" placeholder="Dátum" > <br>
        <input type="submit" name="submit" value="Pridať" >
        
        <input type="submit" name="delete" value="Odstrániť">
        
         <select name="id" id="">
        
        
        <?php
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";  
        }
        ?>
        </select>
    </form>
    <br>
    
  <form action="index.php" method="get">
    <table>
        <th>Číslo zákazky</th>
        <th>Meno</th>
        <th>Miesto</th>
        <th>Dátum</th>
        <?php
        WriteOnScreen();
        ?>
    </table>
  </form>    
   </div>  

   

</body>
</html>

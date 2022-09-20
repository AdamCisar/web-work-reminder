<?php
    include 'db.php';
    Connection();

    
    if(isset($_POST['submit'])){
        Add();
    }
       
    if(isset($_POST['id'])){
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
       <div class="divInput">
        <form action="index.php" method="post">

            <input type="text" name="name" placeholder="Meno a priezvisko" > <br>
            <input type="text" name="place" placeholder="Miesto" ><br>
            <input type="date" name="date" placeholder="Dátum" > <br>
            <input type="submit" name="submit" value="Pridať" >

        </form>
        </div>
    
        <br>
    <div class="divTable">
      <form action="index.php" method="post">
        <table>
            <th>Meno</th>
            <th>Miesto</th>
            <th>Dátum</th>
            <?php
            WriteOnScreen();
            ?>
        </table>
      </form>    
      </div>
   </div>  

   

</body>
</html>

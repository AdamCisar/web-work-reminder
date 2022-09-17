<?php
    include 'db.php';
    Connection();

    
    if(isset($_POST['submit'])){
        Add();
    }
       
    
?>





<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    
    <form action="index.php" method="post">
        
        <input type="text" name="name" placeholder="Meno a priezvisko" >
        <input type="text" name="place" placeholder="Miesto" >
        <input type="date" name="date" placeholder="Dátum" >
        <input type="submit" name="submit" value="Potvrdiť" >
        
        
        
        
    </form>
    
    
</body>
</html>

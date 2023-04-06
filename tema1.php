<?php

$server  = "localhost";
$username="root";
$password="";
$dbname="mydb1";

$connection = new mysqli($server, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];

   
   
   if ($connection) 
   {
       $sqlQuery ="INSERT INTO users(nume, email, parola) VALUES (`$nume`, `$email`, `$parola`)" ;
       
       if ($connection) {
        $sqlQuery = "INSERT INTO users (nume, email, parola) VALUES ('$nume', '$email', '$parola')";
        if (mysqli_query($connection, $sqlQuery)) {
             echo "Username a fost salvat cu succes";
        } else {
          echo "Nu s-a putut salva";
        }
    }
 }
}


?>


<br/><br/><br/><br/>

<form action = "tema1.php" method = "post" >
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      form {
        background-color: #ffffff;
        width: 400px;
        margin: 16px auto;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 0 10px #cccccc;
      }
      label, input {
        display: block;
        width: 100%;
        margin-bottom: 16px;
        border-radius: 8px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 16px 24px;
        border-radius: 8px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      </style>
    Username: <input name = "nume" type = "text"/>
    <br/>
    Email: <input name = "email" type = "text" value =""/>
    <br/>
    Parola: <input name = "parola" type = "text" value =""/>
    <br/>
    <input type ="submit" value = "Insereaza"/>

</form>
<br/>
<br/>

<table  style="border: 1px dashed black; width: 100%;">

<?php  

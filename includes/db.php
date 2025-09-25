<?php

$servername ="localhost";
$username = "root";
$password ="";
$dbname="myblog2";
$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{

die("connection Error"). mysqli_connect_error();
}

else{

    echo "conncted";
}


// $servername ="localhost";
// $username = "root";
// $password ="";
// $dbname="myblog";

// try{
// $pdo = new PDO("mysgi:host=$servername;dbname=$dbname",$username, $password );
// echo "conncted";

// }

// catch(PDOEXCEPTION $e){
// die("connection Error").$e->getMessage();

// }


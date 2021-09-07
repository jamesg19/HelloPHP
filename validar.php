<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$boton2="";
$boton1="";


if(isset($_POST['boton2']))$boton2=$_POST['boton2'];
if(isset($_POST['boton1']))$boton1=$_POST['boton1'];


if($boton1)
{
    echo "Hello ". $firstname." ".$lastname." nice to meet you!";
}




?>
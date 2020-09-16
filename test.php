<?php
class Motorrad {
var $Name;
var $Farbe;

function Motorrad( $name,$farbe ) 
{
	print " Der Name des Bike ist:  ".$name." und die Farbe ist:  ".$farbe."<br>";
}
}
$KTM = new Motorrad("KTM","Orange");
$BMW = new Motorrad("BMW","Blau");
?>
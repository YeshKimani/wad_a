<?php
print"This is my first php";
print "<br>";
print date ('l', strtotime('+125 days'));
print date ('d/m/Y');//using 'F' gives you the full name of the month
//jS brings out e.g the 'rd' in 23rd
// h-hours
//i-minutes
print "<br>";
//s-seconds
date_default_timezone_set("africa/Nairobi");
print "Today is" .date(' l, F jS Y H:i:s');
//Creating  (Declaring) a variable
$fname ="Alex";//Declaration of a variable or a string or a group of words
$yob =1999; //declaring of a digit or an interger
print "<br>";

echo $yob;

print $fname;
$current_year = date ('Y');
echo $current_year;
$age = $current_year - $yob;
print $age;
print "<br>";
print $fname . " is " .$age ." years old ,and was born in " .$yob;
$user_dob = "1999-05-26";
$birthday = new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday ->diff($today);
echo '<pre>';
print_r($interval);
echo '</pre';
print $fname ." is actually, " . $interval->y . " years " . $interval->m . " months, and " .$interval->d . " days old.";


$adult_age = 18;
if($interval ->y > $adult_age){
    print $fname . "is an adult";

}else{
    print $fname . "is NOT an adult";
}
//variable characteristics
$last_name ="kinuthia";
echo "my last name is $last_name";

define ('LNAME' , 'kinuthia');
echo LNAME;
?>




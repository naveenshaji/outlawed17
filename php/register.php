<?php
$name = $_POST['nameofuniversity'];
$number = $_POST['numberofstudents'];
$numberacc = $_POST['numberofstudentsaccomodation'];
$timearrival = $_POST['timeanddatearrival'];
$timedeparture = $_POST['timeanddatedeparture'];
$travel = $_POST['traveldetails'];
$contact = $_POST['contact'];
$eventslist = $_POST['eventslist'];
$selectedChecks  = 'None';
if(isset($_POST['checkboxes']) && is_array($_POST['checkboxes']) && count($_POST['checkboxes']) > 0){
    $selectedProjects = implode(', ', $_POST['checkboxes']);
}


$to = 'outlawed17@gmail.com';
$subject = 'New OUTLAWED Registration';
$message = 'University: '.$name."\r\n".' No. of students: '.$number."\r\n".'No. of students who needs accomodation: '.$numberacc."\r\n".'Time of Arrival: '.$timearrival."\r\n".'Time of Departure: '.$timedeparture."\r\n".'Travel details: '.$travel."\r\n".'Contact: '.$contact."\r\n".'Events: '.$eventslist."\r\n".'Selected Checkboxes: ' . $selectedChecks;
$headers = 'From: mail@nujsoutlawed.in' . "\r\n";


mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your Registration form was sent!"; // success message


?>

<html>
<h2> Uw verzoek is onderweg naar onze mailbox. U krijgt van ons een bevestiging per mail. Dank u wel voor u moeite. </h2>
<br>
<a href="index.php">Klik hier om terug te gaan naar de homepagina.</a>
</html>


<?php

error_reporting(0);
ini_set('display_errors', 0);
require_once 'lib/swift_required.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
    ->setUsername('mesampersian@gmail.com')
    ->setPassword('jneprfqbenrwzaeq')
;

$ontvanger = "email";

$bericht = "Voornaam: ".$_POST['first_name'].
    "<br>Achternaam: ".$_POST['last_name'].
    "<br>E-mail Adres: ".$_POST['email'].
    "<br>Telefoon Nummer: ".$_POST['telephone'].
    "<br>De vraag: ".$_POST['concept'].
    "<br><br>Wat het probleem  is  :<br>".$_POST['comments'];

$bericht2 = "Wij hebben uw vraag binnengekregen. We nemen zo snel mogelijk contact met u op.
 <br><br>U heeft de volgende gegevens achtergelaten, als deze niet kloppen neem dan a.u.b. zo snel mogelijk contact met ons op. <br><br>".$bericht;

$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message())
    ->setFrom(array($_POST['email'] => 'Vraag'))
    ->setTo(array('mesampersian@gmail.com'))
    ->addPart($bericht, 'text/html');
$message2 = (new Swift_Message(' Bevestiging'))
    ->setFrom(array('noreply@SafeBussines' => 'Bussines Mailserver'))
    ->setTo(array($_POST['email']))
    ->addPart($bericht2, 'text/html');

// Send the message
$result = $mailer->send($message).$mailer->send($message2);
?>
<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$messaggio = $_POST['message'];

$destinatario = 'simonedrogabusiness@gmail.com';
$oggetto = 'Nuovo messaggio dal form di contatto';

$contenuto = "Nome: $nome\nEmail: $email\nMessaggio: $messaggio";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($destinatario, $oggetto, $contenuto, $headers)) {
 
   header('Location: thankyou.html');
   exit();
} else {
   echo 'Si è verificato un errore durante l\'invio del messaggio.';
}
?>

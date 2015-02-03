<?php

$post = $_POST;

$name = $post['name'];
$phone = $post['phone'];
$text = $post['text'];

$message = "Wiadomość z formularza w portfolio:\n\n{$text}\n\nDane kontaktowe: \n\n{$name}\n{$phone}";
mail('radek@rkarkut.pl', 'Wiadomość z portfolio (rkarkut.pl)', $message);